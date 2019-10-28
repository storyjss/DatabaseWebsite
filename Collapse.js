var coll = document.getElementsByClassName("collapsible");
var i;
// coll.onclick = function(){toggleText()};

                   //-----\/ 'button_id' - > button_id

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
   // if (this.innerHTML == "Create Playlist") 
   // {
   //     this.innerHTML = "Close";
   // }
   // else 
   // {
   //   this.innerHTML = "Create Playlist";
   // }

   // if (this.innerHTML == "Remove Playlist") 
   // {
   //     this.innerHTML = "Close";
   // }
   // else 
   // {
   //   this.innerHTML = "Remove Playlist";
   // }

   // if (this.innerHTML == "Expand Playlist") 
   // {
   //     this.innerHTML = "Close";
   // }
   // else 
   // {
   //   this.innerHTML = "Expand Playlist";
   // }

    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}