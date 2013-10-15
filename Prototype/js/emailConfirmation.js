$(document).ready(function() {
  $("#email_signup_confirm").keyup(validateemail);
});


function validateemail() {
  var email1 = $("#email_signup").val();
  var email2 = $("#email_signup_confirm").val();

    
 
    if(email1 == email2) {
       $("#email-validate-status").text("valid");
    }
    else {
        $("#email-validate-status").text("invalid");  
    }
    
}
