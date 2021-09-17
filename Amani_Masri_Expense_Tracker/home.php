<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  
 
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body  class="container-login100" style="background-image: url('images/bg-01.jpg');">
	
	     <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Add Expense
      </button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Expense</h5>
		 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form>
      <div class="modal-body">
	    
	    <div class="row ">
          Date: <input type="textbox" id="datepicker" name ="date"></div>
		  <div class="row ">
		  Amount:<input type="textbox" id="amount" name="amount">
		 </div>
		 <div class="row ">
		 <select id ="catg" name ="catg">
         <option disabled selected value >Choose Category</option>
                  </select>
				 </div>
				 
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>
		<div style="background-color: white ; width :95% ; height :90%; ">
		<h1>Expenses </h1>
		<br>
		<p id="session">  <?php
				    session_start();
                    $x = $_SESSION["user_id"];
                    echo $x;
					 ?></p>
		<div class="table-responsive">
		 <table class="table" id ="myTable">
            <tr>
            <th>Category</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Edit</th>
			<th>Delete</th>
			 </tr>
       
         </table>
		</div>			
		</div>
	
	
	

	<div id="dropDownSelect1"></div>
	
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

<script>
             $( document ).ready(function() {
				 
				$('#session').hide();
				var id = $('#session').html();
				
            $( function () {
                   $("#datepicker").datepicker();
            } );
 
			async function fetchAPI(){
				const response = await fetch('http://localhost/Expense_Tracker/display.php?id='+id);
				if(!response.ok){
					const message = "An Error has occured";
					throw new Error(message);
				}
				
				const results = await response.json();
				return results; 
			}
			

		  getData();
		 function getData(){
			fetchAPI().then(results => {
				for (i=0; i<results.length ;i++){
			$('#myTable').append("<tr><td>"+results[i]["name"]+"</td><td>"+results[i]["amount"]+"</td><td>"+results[i]["date"]+"</td><td><i class='fa fa-pencil'></i></td><td><i class='fa fa-trash' id="+results[i]['id']+" value ="+results[i]['id']+"></i></td></tr>");
			    var id = results[i]["id"];
			  $("#"+id).click(function(){
				 response = fetch('http://localhost/Expense_Tracker/delete.php?id='+results[i]["id"]);
				 result = response.json();
				 return result;
				});
				}
			}).catch(error => {
				console.log(error.message);
			});
		}
       
	    async function fetchAPI1(){
				const response = await fetch('http://localhost/Expense_Tracker/categories.php?id='+id);
				if(!response.ok){
					const message = "An Error has occured";
					throw new Error(message);
				}
				
				const results = await response.json();
				return results; 
			}
			

		getData1();
		 function getData1(){
			fetchAPI1().then(results => {
				for (i=0; i<results.length ;i++){
			$('#catg').append("<option>"+results[i]["name"]+"</option>");
			
				}
			}).catch(error => {
				console.log(error.message);
			});
		}
		 
		 
		  
		
		
		
		
		
			 $("#save").click(async function(){
			 var date = $("#datepicker").val();
			  var amount = $("#amount").val();
			  var catg = $("#catg").val();
			 
			 
              await $.ajax({
					type: "POST",
					url: "http://localhost/Expense_Tracker/addexpense.php?id="+id,
					data: {
						 date: date,
			            amount: amount,
			            catg :catg
					},
					cache:false,
					success: function(data){
						alert(data);
					},
				   error: function(xhr,status,error) {
					   console.error(xhr);
				   }
			 
			  });
			  const response = await fetch('http://localhost/Expense_Tracker/addexpense.php');
				if(!response.ok){
					const message = "An Error has occured";
					throw new Error(message);
				}
				
				const results = await response.json();
				return results; 
			
			

		getData1();
		 function getData(){
			fetchAPI().then(results => {
				for (i=0; i<results.length ;i++){
			$('#myTable').append("<tr><td>"+results[i]["name"]+"</td><td>"+results[i]["amount"]+"</td><td>"+results[i]["date"]+"</td><td><i class='fa fa-pencil'></i></td><td><i class='fa fa-trash' id="+results[i]['id']+" value ="+results[i]['id']+"></i></td></tr>");
			 
				}
			}).catch(error => {
				console.log(error.message);
			});
		}
			  
			  
		    
		   
			  });
	   
	    });

</script>
</body>
</html>