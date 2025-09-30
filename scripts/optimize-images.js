#!/usr/bin/env node

import sharp from 'sharp';
import { promises as fs } from 'fs';
import path from 'path';

const SOURCE_DIR = 'public/images';
const BACKUP_DIR = 'public/images/.backups';
const SUPPORTED_FORMATS = ['.png', '.jpg', '.jpeg'];

async function getImageFiles(dir) {
    const imageFiles = [];
    
    async function walkDirectory(currentDir) {
        try {
            const files = await fs.readdir(currentDir, { withFileTypes: true });
            
            for (const file of files) {
                const fullPath = path.join(currentDir, file.name);
                
                if (file.isDirectory() && !file.name.startsWith('.')) {
                    // Recursively walk subdirectories, but skip hidden directories
                    await walkDirectory(fullPath);
                } else if (file.isFile()) {
                    const ext = path.extname(file.name).toLowerCase();
                    if (SUPPORTED_FORMATS.includes(ext) && !file.name.startsWith('.DS_Store')) {
                        imageFiles.push(fullPath);
                    }
                }
            }
        } catch (error) {
            console.error(`Error reading directory ${currentDir}:`, error.message);
        }
    }
    
    await walkDirectory(dir);
    return imageFiles;
}

async function getFileSize(filePath) {
    try {
        const stats = await fs.stat(filePath);
        return stats.size;
    } catch (error) {
        console.error(`Error getting file size for ${filePath}:`, error.message);
        return 0;
    }
}

async function optimizeImage(filePath) {
    const ext = path.extname(filePath).toLowerCase();
    const originalSize = await getFileSize(filePath);
    const relativePath = path.relative(SOURCE_DIR, filePath);
    
    try {
        let optimizer = sharp(filePath);
        
        // Get image metadata to determine if resizing is needed
        const metadata = await optimizer.metadata();
        
        // Resize if image is too large (max 1920px width for web)
        if (metadata.width && metadata.width > 1920) {
            optimizer = optimizer.resize(1920, null, { 
                withoutEnlargement: true,
                fastShrinkOnLoad: false 
            });
        }
        
        if (ext === '.jpg' || ext === '.jpeg') {
            // More aggressive JPEG compression: 75% quality
            optimizer = optimizer.jpeg({ quality: 75, progressive: true, mozjpeg: true });
        } else if (ext === '.png') {
            // PNG optimization
            optimizer = optimizer.png({ 
                compressionLevel: 9, 
                palette: true,
                quality: 85,
                effort: 10
            });
        }
        
        // Write optimized image to temp file first
        const tempPath = filePath + '.tmp';
        await optimizer.toFile(tempPath);
        const newSize = await getFileSize(tempPath);
        
        // Also try WebP conversion for comparison
        const webpPath = filePath + '.webp.tmp';
        await sharp(filePath).webp({ quality: 85, effort: 6 }).toFile(webpPath);
        const webpSize = await getFileSize(webpPath);
        await fs.unlink(webpPath); // Clean up WebP temp file
        
        // Show WebP potential
        if (webpSize < originalSize) {
            const webpSavings = ((originalSize - webpSize) / originalSize * 100).toFixed(1);
            console.log(`💡 ${relativePath}: WebP format would save ${webpSavings}% (${formatBytes(webpSize)})`);
        }
        
        // Only replace if optimization actually reduced file size
        if (newSize < originalSize) {
            await fs.rename(tempPath, filePath);
            const savings = ((originalSize - newSize) / originalSize * 100).toFixed(1);
            console.log(`✅ ${relativePath}: ${formatBytes(originalSize)} → ${formatBytes(newSize)} (${savings}% smaller)`);
        } else {
            // Keep original file, remove temp
            await fs.unlink(tempPath);
            console.log(`➖ ${relativePath}: ${formatBytes(originalSize)} (kept original - optimization would increase size)`);
        }
        
    } catch (error) {
        console.error(`❌ Error optimizing ${relativePath}:`, error.message);
        
        // Clean up temp files if they exist
        try {
            await fs.unlink(filePath + '.tmp');
        } catch {}
        try {
            await fs.unlink(filePath + '.webp.tmp');
        } catch {}
    }
}

function formatBytes(bytes) {
    if (bytes === 0) return '0 Bytes';
    const k = 1024;
    const sizes = ['Bytes', 'KB', 'MB'];
    const i = Math.floor(Math.log(bytes) / Math.log(k));
    return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
}

async function main() {
    console.log('🖼️  Optimizing all images in', SOURCE_DIR);
    console.log('📁 Processing all subdirectories recursively...');
    console.log('');
    
    const imageFiles = await getImageFiles(SOURCE_DIR);
    
    if (imageFiles.length === 0) {
        console.log('📭 No supported images found to optimize.');
        return;
    }
    
    console.log(`📸 Found ${imageFiles.length} image(s) to optimize:\n`);
    
    for (const filePath of imageFiles) {
        await optimizeImage(filePath);
    }
    
    console.log('\n🎉 Image optimization complete!');
    console.log('💡 All images have been optimized in-place');
}

main().catch(error => {
    console.error('Error during optimization:', error);
    process.exit(1);
});
