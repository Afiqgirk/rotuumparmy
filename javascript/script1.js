// CHART ONLY////////////////////////////////////////////////
var modali = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var img2 = document.getElementById("myImg2");
var img3 = document.getElementById("myImg3");
var img4 = document.getElementById("myImg4");
var img5 = document.getElementById("myImg5");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
  // When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modali.style.display = "none";
}

img.onclick = function(){
  modali.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;

}

img2.onclick = function(){
    modali.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  img3.onclick = function(){
    modali.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  img4.onclick = function(){
    modali.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  img5.onclick = function(){
    modali.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;

  }









