const newCarSlides = document.querySelectorAll(".new"),
    popCarSlides = document.querySelectorAll(".pop"),
    newDots = document.querySelectorAll(".new-d"),
    popDots = document.querySelectorAll(".pop-d");
var slideIndex = 1;

function newPlusSlides(n) {
  newShowSlides(slideIndex += n);
}

function newCurrentSlide(n) {
  newShowSlides(slideIndex = n);
}

function popPlusSlides(n) {
  popShowSlides(slideIndex += n);
}

function popCurrentSlide(n) {
  popShowSlides(slideIndex = n);
}

function newShowSlides(n) {
  var i;
  if (n > newCarSlides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = newCarSlides.length}
  for (i = 0; i < newCarSlides.length; i++) {
      newCarSlides[i].style.display = "none";
  }
  for (i = 0; i < newDots.length; i++) {
      newDots[i].className = newDots[i].className.replace(" active", "");
  }
  newCarSlides[slideIndex-1].style.display = "block";
  newDots[slideIndex-1].className += " active";
}

function popShowSlides(n) {
var i;
if (n > popCarSlides.length) {slideIndex = 1}
if (n < 1) {slideIndex = popCarSlides.length}
for (i = 0; i < popCarSlides.length; i++) {
    popCarSlides[i].style.display = "none";
}
for (i = 0; i < popDots.length; i++) {
    popDots[i].className = popDots[i].className.replace(" active", "");
}
popCarSlides[slideIndex-1].style.display = "block";
popDots[slideIndex-1].className += " active";
}

function init(){
    newShowSlides(slideIndex);
    popShowSlides(slideIndex);
    
}

init();