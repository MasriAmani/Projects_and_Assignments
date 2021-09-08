$(document).ready(function(){




var emailValid;
var confirmPass;
var phoneValid;
var ageValid;
var fnameValid;
var lnameValid;
// Listeners


$("#signbutton").click( function () {
  validateEmail();
  confirmPassword();
  validatePhone();
  validateAge();
  validatefname();
  validatelname();
  

  if(!phoneValid){
	  $("#phone").addClass("alert-danger");
  }

  if(!ageValid){
	   $("#birthday").attr("class","alert-danger");;
  }

  if(!confirmPass){
    $("#confirmPassword").attr("class","alert");
  }

  if(!emailValid){
   $("#email").attr("class","alert");
  }

  if(!fnameValid){
     $("#first_name1").attr("class","alert");
  }

  if(!lnameValid){
	   $("#last_name1").attr("class","alert");
     
  }

  if (emailValid && confirmPass && phoneValid && ageValid) {
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

function validateAge() {
  ageValid = false;
  var date = new Date($("#birthday").val());

  var diff_ms = Date.now() - date.getTime();

  var age_dt = new Date(diff_ms);
  if (Math.abs(age_dt.getUTCFullYear() - 1970) >= 18) {
    ageValid = true;
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