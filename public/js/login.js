// JavaScript for image slideshow
const imageFolder = 'images/';
const images = [
  imageFolder + "1.jpg",
  imageFolder + "2.jpg",
  imageFolder + "1.jpg"
];
let currentImageIndex = 0;

function changeImage() {
  const imageElement = document.querySelector(".image-slideshow");
  imageElement.src = images[currentImageIndex];
  currentImageIndex = (currentImageIndex + 1) % images.length;
}

setInterval(changeImage, 1000); // Change image every 2 seconds