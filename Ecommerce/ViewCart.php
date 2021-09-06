
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Ecommerce Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
  <?php
session_start();
?>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Enjoy shopping or Create your own store !</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
			 <li class="nav-item">
              <a class="nav-link" href="homecust.php">stores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
	<br>
<h1 align="center" style="color: #1e8c6e;"> Your Cart </h1>
<br>
<table border="10px" cellspacing = "12px" width ="100%" >
			  <tr>
			  <th align ="center"> Product_name </th>
			   <th align ="center"> Image </th>
			    <th align ="center"> Quantity </th>
				 <th align ="center"> Price per piece</th>
				   </tr>
				   <?php
				   
                   include "connection.php";
                    
				            $sql="Select * from purchased ;";
                             $stmt = $connection->prepare($sql);
				             $stmt->execute();
                             $result = $stmt->get_result();
							  while($row = $result->fetch_assoc()){
								   $id = $row['product_id'];
								   $sql1="Select * from products where id =$id;";
                                   $stmt1 = $connection->prepare($sql1);
				                   $stmt1->execute();
                                   $result1 = $stmt1->get_result();
				                   $row1 = $result1->fetch_assoc();
					  ?>
					  <tr>
					  <td align ="center"> <?php  
	                      echo $row1["name"];?> </td>
						  <td align ="center"> <?php 
						    $image = $row1["image"];
						     echo "<img src='assets/images/$image' height ='20%' width ='20%'>"; ?>
	                       </td>
						  <td align ="center"> <?php 
						    $quan =$row['quantity'];
	                        echo $quan;?> </td>
						   <td align ="center"> <?php  
	                      echo $row1["price"]."$";?> </td>
						  </tr>
						  
						   
						   
						  
                          
					   
					<?php } ?>
				   
                      </table>
					  <br>
					  <br>
					  <div class ="row">
					   <div class ="col-md-6">
			           <h1> <a href="done.php" >Done shopping </a> <h1>
					   </div>
					   <div class ="col-md-6">
                       <h1> <a href="homecust.php" >Purchase More</a> <h1>
					   </div>
					   </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			
             </div>
        

   
        


    
    <!-- Footer Starts Here -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="logo">
              <img src="assets/images/logo.png" alt="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">How It Works ?</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="social-icons">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright-text">
              <p>Copyright &copy; 2019 Company Name 
                
                - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	  <script src="script.js"></script>
    


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
