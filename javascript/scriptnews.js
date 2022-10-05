//news ONLY///////////////////////////////////////////////////////
var slideIndex = 1;
showSlides(slideIndex);

var slideIndex1 = 1;
showSlides1(slideIndex1);

var slideIndex2 = 1;
showSlides2(slideIndex2);
//////////////////////////////////////////////////////////////
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function plusSlides1(m) {
  showSlides1(slideIndex1 += m);
}

function plusSlides2(o) {
  showSlides2(slideIndex2 += o);
}
///////////////////////////////////////////////////////////////
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function currentSlide1(m) {
    showSlides1(slideIndex1 = m);
  }

function currentSlide2(o) {
  showSlides2(slideIndex2 = o);
}
//////////////////////////////////////////////////////////////////
function showSlides(n) {
  var i;
  
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demonews");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

  function showSlides1(m) {
    var j;
    var slides1 = document.getElementsByClassName("mySlides1");
  var dots1 = document.getElementsByClassName("demonews1");
  if (m > slides1.length) {slideIndex1 = 1}
  if (m < 1) {slideIndex1 = slides1.length}
  for (j = 0; j < slides1.length; j++) {
      slides1[j].style.display = "none";
  }
  for (j = 0; j < dots1.length; j++) {
      dots1[j].className = dots1[j].className.replace(" active", "");
  }
  slides1[slideIndex1-1].style.display = "block";
  dots1[slideIndex1-1].className += " active";

}

function showSlides2(o) {
    var o;
    var slides2 = document.getElementsByClassName("mySlides2");
  var dots2 = document.getElementsByClassName("demonews2");
  if (o > slides2.length) {slideIndex2 = 1}
  if (o < 1) {slideIndex2 = slides2.length}
  for (o = 0; o < slides2.length; o++) {
      slides2[o].style.display = "none";
  }
  for (o = 0; o < dots2.length; o++) {
      dots2[o].className = dots2[o].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots2[slideIndex2-1].className += " active";

}
