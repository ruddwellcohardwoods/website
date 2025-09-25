#!/usr/bin/env node

import sharp from 'sharp';
import { promises as fs } from 'fs';
import path from 'path';

const IMAGES_DIR = 'public/images/home';
const SUPPORTED_FORMATS = ['.png', '.jpg', '.jpeg'];

async function getImageFiles(dir) {
    try {
        const files = await fs.readdir(dir);
        return files.filter(file => {
            const ext = path.extname(file).toLowerCase();
            return SUPPORTED_FORMATS.includes(ext) && !file.startsWith('.DS_Store');
        });
    } catch (error) {
        console.error(`Error reading directory ${dir}:`, error.message);
        return [];
    }
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
            // More aggressive JPEG compression: 70% quality
            optimizer = optimizer.jpeg({ quality: 70, progressive: true, mozjpeg: true });
        } else if (ext === '.png') {
            // More aggressive PNG optimization
            optimizer = optimizer.png({ 
                compressionLevel: 9, 
                palette: true,
                quality: 80,
                effort: 10  // Maximum effort for compression
            });
        }
        
        // Write optimized image to temp file first
        await optimizer.toFile(filePath + '.tmp');
        const newSize = await getFileSize(filePath + '.tmp');
        
        // Also try WebP conversion for even better compression
        const webpPath = filePath + '.webp.tmp';
        await sharp(filePath).webp({ quality: 80, effort: 6 }).toFile(webpPath);
        const webpSize = await getFileSize(webpPath);
        
        // Choose the smallest version
        if (webpSize < newSize && webpSize < originalSize) {
            // WebP is smallest - but keep original format for compatibility
            await fs.unlink(webpPath);
            console.log(`💡 ${path.basename(filePath)}: WebP would be ${formatBytes(webpSize)} (${((originalSize - webpSize) / originalSize * 100).toFixed(1)}% smaller) - consider WebP format`);
        } else {
            await fs.unlink(webpPath);
        }
        
        // Only keep the optimized version if it's actually smaller
        if (newSize < originalSize) {
            await fs.rename(filePath + '.tmp', filePath);
            const savings = ((originalSize - newSize) / originalSize * 100).toFixed(1);
            console.log(`✓ ${path.basename(filePath)}: ${formatBytes(originalSize)} → ${formatBytes(newSize)} (${savings}% reduction)`);
        } else {
            // Keep original file, remove temp
            await fs.unlink(filePath + '.tmp');
            console.log(`- ${path.basename(filePath)}: ${formatBytes(originalSize)} (kept original, optimization would increase size)`);
        }
        
    } catch (error) {
        console.error(`✗ Error optimizing ${path.basename(filePath)}:`, error.message);
        
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
    console.log('🖼️  Optimizing images in', IMAGES_DIR);
    console.log('');
    
    const imageFiles = await getImageFiles(IMAGES_DIR);
    
    if (imageFiles.length === 0) {
        console.log('No supported images found to optimize.');
        return;
    }
    
    console.log(`Found ${imageFiles.length} image(s) to optimize:`);
    console.log('');
    
    for (const file of imageFiles) {
        const filePath = path.join(IMAGES_DIR, file);
        await optimizeImage(filePath);
    }
    
    console.log('');
    console.log('✅ Image optimization complete!');
}

main().catch(error => {
    console.error('Error during optimization:', error);
    process.exit(1);
});
