//carosello mobile touch
// prende gli elementi
const slider = document.querySelector(".slider-container"),
  slides = Array.from(document.querySelectorAll(".slide"));

// imposta diversi stati
let isDragging = false,
  startPos = 0,
  currentTranslate = 0,
  prevTranslate = 0,
  animationID,
  currentIndex = 0;

//collegamento a punti

function currentSlide(n) {
  touchEnd((currentIndex = n));
}

const points = document.getElementsByClassName("point");
points[0].style.backgroundColor = "red";

// event listener
slides.forEach((slide, index) => {
  const slideImage = slide.querySelector(".card");
  // toglie il trascinamento dell'immagine di default
  slideImage.addEventListener("dragstart", (e) => e.preventDefault());
  // eventi touch
  slide.addEventListener("touchstart", touchStart(index));
  slide.addEventListener("touchend", touchEnd);
  slide.addEventListener("touchmove", touchMove);
  // eventi mouse
  slide.addEventListener("mousedown", touchStart(index));
  slide.addEventListener("mouseup", touchEnd);
  slide.addEventListener("mousemove", touchMove);
  slide.addEventListener("mouseleave", touchEnd);
});

//rende responsive le modifiche al viewport (area visibile all'utente)
window.addEventListener("resize", setPositionByIndex);

// se si preme a lungo il menu impedisce il popup
window.oncontextmenu = function (event) {
  event.preventDefault();
  event.stopPropagation();
  return false;
};

function getPositionX(event) {
  return event.type.includes("mouse") ? event.pageX : event.touches[0].clientX;
}

function touchStart(index) {
  return function (event) {
    currentIndex = index;
    startPos = getPositionX(event);
    isDragging = true;
    animationID = requestAnimationFrame(animation);
    slider.classList.add("grabbing");
    points[currentIndex].style.backgroundColor = "#2c79bf";
  };
}

function touchMove(event) {
  if (isDragging) {
    const currentPosition = getPositionX(event);
    currentTranslate = prevTranslate + currentPosition - startPos;
  }
}

function touchEnd() {
  cancelAnimationFrame(animationID);
  isDragging = false;
  const movedBy = currentTranslate - prevTranslate;

  // se si muove verso sinistra in negativo, passare alla diapositiva successiva
  if (movedBy < -100 && currentIndex < slides.length - 1) currentIndex += 1;

  // se si muove a destra in positivo passare alla diapositiva precedente
  if (movedBy > 100 && currentIndex > 0) currentIndex -= 1;

  setPositionByIndex();

  slider.classList.remove("grabbing");
}

function animation() {
  setSliderPosition();
  if (isDragging) requestAnimationFrame(animation);
}

function setPositionByIndex() {
  currentTranslate = currentIndex * -window.innerWidth;
  prevTranslate = currentTranslate;
  points[currentIndex].style.backgroundColor = "black";
  setSliderPosition();
}

function setSliderPosition() {
  slider.style.transform = `translateX(${currentTranslate}px)`;
}
