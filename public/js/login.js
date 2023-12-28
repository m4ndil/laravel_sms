//image slideshowss
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

setInterval(changeImage, 2000); // Change image every 2 seconds

var passwordInput = document.getElementById("password");
var togglePasswordIcon = document.getElementById("togglePassword");

togglePasswordIcon.addEventListener("click", function () {
  if (passwordInput.type === "password") {
      passwordInput.type = "text";
      togglePasswordIcon.classList.remove("fa-eye");
      togglePasswordIcon.classList.add("fa-eye-slash");
  } else {
      passwordInput.type = "password";
      togglePasswordIcon.classList.remove("fa-eye-slash");
      togglePasswordIcon.classList.add("fa-eye");
  }
});
