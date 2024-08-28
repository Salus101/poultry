document.addEventListener('DOMContentLoaded', function() {
    const heroSection = document.querySelector('.hero-section');
    const images = ['/images/bg2.jpg', '/images/bg3.jpg', '/images/bg1.jpg']; // Array of image paths
    let currentImageIndex = 0;

    function changeBackground() {
        // Create a new background image element
        const newBg = document.createElement('div');
        newBg.classList.add('bg-image');
        newBg.style.backgroundImage = `url('${images[currentImageIndex]}')`;

        // Append new image to hero section
        heroSection.appendChild(newBg);

        // Fade out the previous image
        const currentBg = heroSection.querySelector('.bg-image');
        if (currentBg) {
            currentBg.style.opacity = 0;
            setTimeout(() => {
                heroSection.removeChild(currentBg);
            }, 1000); // Match this with your transition duration
        }

        // Fade in the new image
        newBg.style.opacity = 1;

        // Move to the next image
        currentImageIndex = (currentImageIndex + 1) % images.length;
    }

    // Change background every 5 seconds
    setInterval(changeBackground, 5000);

    // Initialize the first background
    changeBackground();
});
