var acc = document.getElementsByClassName("accordionfaq");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activefaq");
    
    var panelfaq = this.nextElementSibling;
    if (panelfaq.style.maxHeight) {
      panelfaq.style.maxHeight = null;
    } else {
      panelfaq.style.maxHeight = panelfaq.scrollHeight + "px";
    } 
  });
}

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV button").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});