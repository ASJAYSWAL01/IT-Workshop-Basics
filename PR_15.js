let currentRotation = 0;

function rotate(angle) {
  currentRotation = angle;
  document.getElementById("img").style.transform = "rotate(" + currentRotation + "deg)";
}

function rotateStep() {
  currentRotation += 15;
  document.getElementById("img").style.transform = "rotate(" + currentRotation + "deg)";
}
