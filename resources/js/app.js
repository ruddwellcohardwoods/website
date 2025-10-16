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
(function() {
    let currentIndex = 0;
    let galleryImages = [];
    let lightbox, lightboxImg, lightboxCounter, closeBtn, prevBtn, nextBtn;
    let keyboardListenerAdded = false;
    
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
    
    // Initialize or reinitialize the lightbox
    function initLightbox() {
        lightbox = document.getElementById('lightbox');
        lightboxImg = document.getElementById('lightbox-img');
        lightboxCounter = document.getElementById('lightbox-counter');
        closeBtn = document.getElementById('lightbox-close');
        prevBtn = document.getElementById('lightbox-prev');
        nextBtn = document.getElementById('lightbox-next');
        
        if (!lightbox) return;
        
        // Collect images
        collectGalleryImages();
        
        // Use event delegation for dynamic content
        document.body.removeEventListener('click', handleGalleryClick);
        document.body.addEventListener('click', handleGalleryClick);
        
        // Close button
        if (closeBtn) {
            closeBtn.removeEventListener('click', closeLightbox);
            closeBtn.addEventListener('click', closeLightbox);
        }
        
        // Previous button
        if (prevBtn) {
            prevBtn.removeEventListener('click', showPrev);
            prevBtn.addEventListener('click', showPrev);
        }
        
        // Next button
        if (nextBtn) {
            nextBtn.removeEventListener('click', showNext);
            nextBtn.addEventListener('click', showNext);
        }
        
        // Click outside image to close
        lightbox.removeEventListener('click', handleLightboxClick);
        lightbox.addEventListener('click', handleLightboxClick);
        
        // Keyboard navigation (only add once)
        if (!keyboardListenerAdded) {
            document.addEventListener('keydown', handleKeyboard);
            keyboardListenerAdded = true;
        }
    }
    
    // Handle gallery item clicks with event delegation
    function handleGalleryClick(e) {
        const galleryItem = e.target.closest('.gallery-item');
        if (galleryItem) {
            const allItems = Array.from(document.querySelectorAll('.gallery-item'));
            const index = allItems.indexOf(galleryItem);
            if (index !== -1) {
                openLightbox(index);
            }
        }
    }
    
    // Handle lightbox background clicks
    function handleLightboxClick(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    }
    
    // Handle keyboard events
    function handleKeyboard(e) {
        if (lightbox && !lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                showPrev();
            } else if (e.key === 'ArrowRight') {
                showNext();
            }
        }
    }
    
    // Initialize on page load
    document.addEventListener('DOMContentLoaded', initLightbox);
    
    // Expose reinit function globally for dynamic content
    window.reinitLightbox = initLightbox;
})();
