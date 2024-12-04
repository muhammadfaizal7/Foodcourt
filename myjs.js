$(document).ready(function () {
  $("#myBtn").click(function () {
    $("#myModal").modal();
  });
});
// Show modal on login button click
document.getElementById("loginBtn").addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("loginModal").style.display = "flex";
});

// Close modal on close button click
document.getElementById("closeModalBtn").addEventListener("click", function () {
  document.getElementById("loginModal").style.display = "none";
});

// Close modal on cancel button in footer
document
  .getElementById("closeModalFooterBtn")
  .addEventListener("click", function () {
    document.getElementById("loginModal").style.display = "none";
  });
