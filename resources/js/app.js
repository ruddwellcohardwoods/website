import './bootstrap';

// Set note card height to match column layout
function setNoteCardHeight() {
    const noteCard = document.getElementById('note-card');
    
    if (noteCard) {
        const firstGalleryItem = noteCard.nextElementSibling;
        
        if (firstGalleryItem) {
            const imageHeight = firstGalleryItem.offsetHeight;
            if (imageHeight > 0) {
                noteCard.style.minHeight = `${imageHeight}px`;
            }
        }
    }
}

// Run after images load and on resize
window.addEventListener('load', () => {
    setTimeout(setNoteCardHeight, 100);
});
window.addEventListener('resize', setNoteCardHeight);

// Gallery Lightbox Functionality
document.addEventListener('DOMContentLoaded', function() {
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCounter = document.getElementById('lightbox-counter');
    const closeBtn = document.getElementById('lightbox-close');
    const prevBtn = document.getElementById('lightbox-prev');
    const nextBtn = document.getElementById('lightbox-next');
    
    let currentIndex = 0;
    let galleryImages = [];
    
    // Collect all gallery images on the page
    function collectGalleryImages() {
        const images = document.querySelectorAll('.gallery-item img');
        galleryImages = Array.from(images).map(img => ({
            src: img.src,
            alt: img.alt
        }));
    }
    
    // Open lightbox
    function openLightbox(index) {
        currentIndex = index;
        lightboxImg.src = galleryImages[currentIndex].src;
        lightboxImg.alt = galleryImages[currentIndex].alt;
        updateCounter();
        lightbox.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    // Close lightbox
    function closeLightbox() {
        lightbox.classList.add('hidden');
        document.body.style.overflow = '';
    }
    
    // Update counter
    function updateCounter() {
        lightboxCounter.textContent = `${currentIndex + 1} / ${galleryImages.length}`;
    }
    
    // Navigate to previous image
    function showPrev() {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        lightboxImg.src = galleryImages[currentIndex].src;
        lightboxImg.alt = galleryImages[currentIndex].alt;
        updateCounter();
    }
    
    // Navigate to next image
    function showNext() {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        lightboxImg.src = galleryImages[currentIndex].src;
        lightboxImg.alt = galleryImages[currentIndex].alt;
        updateCounter();
    }
    
    // Collect images when page loads
    collectGalleryImages();
    
    // Add click event to all gallery items
    document.querySelectorAll('.gallery-item').forEach((item, index) => {
        item.addEventListener('click', () => openLightbox(index));
    });
    
    // Close button
    if (closeBtn) {
        closeBtn.addEventListener('click', closeLightbox);
    }
    
    // Previous button
    if (prevBtn) {
        prevBtn.addEventListener('click', showPrev);
    }
    
    // Next button
    if (nextBtn) {
        nextBtn.addEventListener('click', showNext);
    }
    
    // Click outside image to close
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                showPrev();
            } else if (e.key === 'ArrowRight') {
                showNext();
            }
        }
    });
});
