$(document).ready(function() {
  $("#email_signup_confirm").keyup(validate);
});


function validate() {
  var password1 = $("#email_signup").val();
  var password2 = $("#email_signup_confirm").val();

    
 
    if(password1 == password2) {
       $("#email-validate-status").text("valid");
    }
    else {
        $("#email-validate-status").text("invalid");  
    }
    
}
