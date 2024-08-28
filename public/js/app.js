// Array of image paths
const images = ['images/bg2.jpg', 'images/bg3.jpg', 'images/bg1.jpg'];
let currentImageIndex = 0;

function changeBackgroundImage() {
    // Get the hero section element
    const heroSection = document.querySelector('.hero-section');

    // Update the background image
    heroSection.style.backgroundImage = `url(${images[currentImageIndex]})`;

    // Update the index to the next image
    currentImageIndex = (currentImageIndex + 1) % images.length;
}

// Change the background image every 5 seconds (5000ms)
setInterval(changeBackgroundImage, 5000);

// Initial call to set the first background image
changeBackgroundImage();
