
 var password = document.getElementById("password");
 conpassword = document.getElementById("conpassword");

function validatePassword(){
  if(password.value != conpassword.value) {
    conpassword.setCustomValidity("Passwords Don't Match");
  } else {
    conpassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
conpassword.onkeyup = validatePassword;

    