var slider_images = [
  "images/01.png",
  "images/02.png",
  "images/03.png",
  "images/04.png",
  "images/05.png",
  "images/06.png",
  "images/07.png",
  "images/08.png",
  "images/09.png",
  "images/10.png",
];
var img = document.querySelector(".pictures");

var i = 0;
function next() {
  if (i < slider_images.length - 1) {
    i++;
    img.src = slider_images[i];
  } else {
    i = 0;
    img.src = slider_images[i];
  }
}
function prev() {
  if (i > 0) {
    i--;
    img.src = slider_images[i];
  } else {
    i = slider_images.length - 1;
    img.src = slider_images[i];
  }
}
