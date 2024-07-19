function checkPasswords() {
  let password = document.getElementById("password").value;
  let passwordConfirm = document.getElementById("passwordConfirm").value;
  if (password !== passwordConfirm) {
    document.getElementById("passwordMismatch").textContent =
      "Passwords do not match";
    return false;
  }
}

function signupSuccess() {
  alert("Your account has been created!");
  window.location.href = "index.php";
}
