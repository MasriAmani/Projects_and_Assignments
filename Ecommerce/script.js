$(document).ready(function(){




var emailValid;
var confirmPass;
var phoneValid;
var fnameValid;
var lnameValid;
// Listeners


$("#signbutton").click( function () {
  validateEmail();
  confirmPassword();
  validatePhone();
  validatefname();
  validatelname();
  

  if(!phoneValid){
	  $("#phone").alert();
  }

  

  if(!confirmPass){
    $("#confirmPassword").alert();
  }

  if(!emailValid){
   $("#email").alert();
  }

  if(!fnameValid){
     $("#first_name1").alert();
  }

  if(!lnameValid){
	   $("#last_name1").alert();
     
  }

  if (emailValid && confirmPass && phoneValid ) {
    $("#subscribe").submit();
  }
});

function validateEmail() {
	 
  emailValid = false;
  if (
    $("#email").val().length > 5 &&
     $("#email").val().lastIndexOf(".") >  $("#email").val().lastIndexOf("@") &&
     $("#email").val().lastIndexOf("@") != -1
  ) {
    emailValid = true;
  }
}

function confirmPassword() {
  confirmPass = false;
  if ( $("#password").val() ==  $("#confirmPassword").val() &&  $("#password").val().length > 5) {
    confirmPass = true;
  }
}

function validatePhone() {
  phoneValid = false;
  $("#phone").val().split(" ").join("");
  if (
    ($("#phone").val().length == 12 || $("#phone").val().length == 11) &&
    $("#phone").val().indexOf("+961") == 0
  ) {
    phoneValid = true;
  }
}

function validatefname(){
  fnameValid = false;
  if($("#first_name1").val().length>2){
    fnameValid = true;
  }
}

function validatelname(){
  lnameValid = false;
  if($("#last_name1").val().length>2){
    lnameValid = true;
  }
}

});