// Get the modal
var modal = document.getElementById("addUserModal");
function showModal(){
  modal.style.display = "block";
}
function hideModal(){
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
} 