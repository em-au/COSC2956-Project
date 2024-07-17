function checkPasswords() {
  let password = document.getElementById("password").value;
  let passwordConfirm = document.getElementById("passwordConfirm").value;
  if (password !== passwordConfirm) {
    alert("Passwords don't match");
    return false;
  }
}
