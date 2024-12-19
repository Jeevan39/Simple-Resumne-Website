$(document).ready(function () {
  // Optional: Add client-side validation or interactivity
  $("#registrationForm").on("submit", function (e) {
    if (!$("#name").val()) {
      alert("Please enter your name!");
      e.preventDefault();
    }
  });
});
