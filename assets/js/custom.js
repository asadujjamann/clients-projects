


// flow-journey-preferred
      // Get the modal
      var modal = document.getElementById("flow-j-p-modal");

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      var img = document.getElementById("myImg");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("myClose")[0];
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }



// flow-journey-personalize
var modal = document.getElementById("flow-j-persona-modal");
var img = document.getElementById("flow-j-persona-img-small");
var modalImg = document.getElementById("flow-j-persona-modal-img");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("flow-j-persona-close")[0];
span.onclick = function() {
  modal.style.display = "none";
}






// flow-journey-personalize-setup-page
var modal = document.getElementById("flow-j-persona-setup-page-modal");
var img = document.getElementById("flow-j-persona-setup-page-img");
var modalImg = document.getElementById("flow-j-persona-setup-page-modal-img");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("flow-j-persona-setup-page-close")[0];
span.onclick = function() {
  modal.style.display = "none";
}




// Thinx Branding
var modal = document.getElementById("thinx-branding-img-modal");
var img = document.getElementById("thinx-branding-img");
var modalImg = document.getElementById("thinx-branding-img-modalImg");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("thinx-branding-img-close")[0];
span.onclick = function() {
  modal.style.display = "none";
}





