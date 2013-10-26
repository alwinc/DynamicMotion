$(document).ready(function() {
  $("#password_signup_confirm").keyup(validate);
});


function validate() {
  var password1 = $("#password_signup").val();
  var password2 = $("#password_signup_confirm").val();

    
 
    if(password1 == password2) {
       $("#password-validate-status").text("valid");
    }
    else {
        $("#password-validate-status").text("invalid");  
    }
    
}
