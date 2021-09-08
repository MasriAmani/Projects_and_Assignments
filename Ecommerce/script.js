$(document).ready(function(){


 $("#signbutton").click(function myFunction(e) {
 



var emailValid;
var confirmPass;
var passValid;
var phoneValid;
var fnameValid;
var lnameValid;
// Listeners


  validateEmail();
  validPassword();
  confirmPassword();
  validatePhone();
  validatefname();
  validatelname();
  

  if(!phoneValid){
   $("#hide4").css("color", "red");
    $("#hide4").html("Invalid Phone Number");
	 
  }
else {
	  $("#hide4").html("");
  }
  
  
if(!passValid){
    $("#hide5").css("color", "red");
    $("#hide5").html("Password must be more than 5 chars");
  }
  else {
	  $("#hide5").html("");
  }  

  if(!confirmPass){
    $("#hide6").css("color", "red");
    $("#hide6").html("Please Confirm Password");
  }
  else {
	  $("#hide6").html("");
  }
  
  
  
  

  if(!emailValid){
    $("#hide3").css("color", "red");
    $("#hide3").html("Invalid Email");
  }
  else {
	  $("#hide3").html("");
  }
  

  if(!fnameValid){
   $("#hide1").css("color", "red");
    $("#hide1").html("Invalid First Name");
  }
  else {
	  $("#hide1").html("");
  }
 
	     
  if(!lnameValid){
	$("#hide2").css("color", "red");
    $("#hide2").html("Invalid Last Name");
     
  }
else {
	  $("#hide2").html("");
  }


 if ( !passValid || !fnameValid || !lnameValid || !emailValid || !confirmPass || !phoneValid ) {
  
	 e.preventDefault();
     e.stopPropagation();
     e.stopImmediatePropagation();

  return false;}


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

function validPassword() {
  passValid= false;
  if ( $("#password").val().length > 5 ) {
    passValid = true;
  }
}
 

function confirmPassword() {
  confirmPass = false;
  if ( $("#password").val() ==  $("#confirmPassword").val()) {
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

}
);

$("#hombutton").click(function myFunction1(e) {

var emailValid1;
validateEmail1();
 function validateEmail1() {
	 
  emailValid1= false;
  if (
    $("#email1").val().length > 5 &&
     $("#email1").val().lastIndexOf(".") >  $("#email1").val().lastIndexOf("@") &&
     $("#email1").val().lastIndexOf("@") != -1
  ) {
    emailValid1 = true;
  }
}

 if(!emailValid1){
    $("#hide11").css("color", "red");
    $("#hide11").html("Invalid Email");
  }
  else {
	  $("#hide11").html("");
  }

if ( !emailValid1 ) {
  
	 e.preventDefault();
     e.stopPropagation();
     e.stopImmediatePropagation();

  return false;}
});


$("#register").click(function myFunction(e) {
var SnameValid ;
var phoneValid2 ;
validateSname();
validatePhone2 ();

function validateSname(){
  SnameValid = false;
  if($("#store_name").val().length>2){
    SnameValid = true;
  }
}

function validatePhone2() {
  phoneValid2 = false;
  $("#phone2").val().split(" ").join("");
  if (
    ($("#phone2").val().length == 12 || $("#phone2").val().length == 11) &&
    $("#phone2").val().indexOf("+961") == 0
  ) {
    phoneValid2 = true;
  }
}

if(!SnameValid){
   $("#hide21").css("color", "red");
    $("#hide21").html("Store Name Invalid (must be > 3 chars)");
  }
  else {
	  $("#hide21").html("");
  }
 
if(!phoneValid2){
   $("#hide22").css("color", "red");
    $("#hide22").html("Invalid Phone Number");
  }
  else {
	  $("#hide22").html("");
  }
 if ( !SnameValid || !phoneValid2 ) {
  
	 e.preventDefault();
     e.stopPropagation();
     e.stopImmediatePropagation();

  return false;}
});




});

