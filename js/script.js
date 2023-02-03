"use script";

const pictures = document.querySelectorAll(".gallery__item");
const closeBtn = document.querySelector(".close-btn");
const openBtn = document.querySelectorAll(".gallery--link");
const overlay = document.getElementById("overlay");
const imageOverlay = document.querySelectorAll(".gallery--overlay");
const figcaption = document.querySelectorAll(".gallery__img--description");

const openImage = function (element) {
  element.classList.add("pop-image");
  overlay.classList.add("active");
};

const closeImage = function (element) {
  element.classList.remove("pop-image");
  overlay.classList.remove("active");
};

const closeOnOutsideClick = function () {
  for (let i = 0; i < pictures.length; i++) {
    closeImage(pictures[i]);
    closeBtn.classList.add("hidden");
    openBtn[i].classList.remove("hidden");
    figcaption[i].classList.remove("hidden");
    imageOverlay[i].classList.remove("hidden");
  }
};

for (let i = 0; i < pictures.length; i++) {
  openBtn[i].addEventListener("click", function () {
    openImage(pictures[i]);
    openBtn[i].classList.add("hidden");
    figcaption[i].classList.add("hidden");
    imageOverlay[i].classList.add("hidden");
    closeBtn.classList.remove("hidden");
  });
  closeBtn.addEventListener("click", function () {
    closeOnOutsideClick();
  });
}

overlay.addEventListener("click", closeOnOutsideClick);

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    closeOnOutsideClick();
  }
});

