
// eyes-password js
function togglePasswordVisibility() {
    var passwordInput = document.getElementById("passwordInput");
    var icon = document.querySelector(".toggle-password i");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    } else {
      passwordInput.type = "password";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    }
  }