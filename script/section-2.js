function Myfunctionrm(f) {
  let y = document.getElementById("show-read-more");
  y.classList.toggle("visible-read-more");
}

let pdfDisplayer = document.getElementById("iframe-sports-bullet-1");


function changeIframeSrc(src) {
  pdfDisplayer.src = src.getAttribute("data-iframe-source");
}

let spBuContainer = document.getElementById("sports-bullet-container-div");

function toggleSpBulContainer() {
  spBuContainer.classList.toggle("sports-bullet-container-show");
}

function toggleSpBulContainer() {
  spBuContainer.classList.toggle("sports-bullet-container-show");
}