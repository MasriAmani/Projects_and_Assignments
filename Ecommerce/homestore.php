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
<h1 align="center" style="color: #1e8c6e;"> Your Products </h1>
<br>

   <div class="container">
   <div class ="row">
   <div class="col-md-6">
   <h1>Update Your products </h1>
   </div>
   <div class="col-md-6">
   <h1><a href=<?php echo "additem.php"?>>
                Add New Item </a>  </h1>
   </div>
   </div>
   
   <br>
       
              <table border="10px" cellspacing = "12px" width ="100%" >
			  <tr>
			  <th align ="center"> Product_name </th>
			   <th align ="center"> Image </th>
			    <th align ="center"> Quantity </th>
				 <th align ="center"> Price</th>
				  <th align ="center"> Increase Quantity</th>
				   <th align ="center"> Decrease Quantity</th>
				    <th align ="center"> Remove Item</th>
				   </tr>
				   <?php
				   include "connection.php";
				    $id = $_SESSION["store_id"];
				   $sql="Select * from products where store_id=$id";
                   $stmt = $connection->prepare($sql);
				   
                   $stmt->execute();
                   $result = $stmt->get_result();
				   while($row = $result->fetch_assoc()){
					  ?>
					  <tr>
					  <td align ="center"> <?php  
	                      echo $row["name"];?> </td>
						  <td align ="center"> <?php 
						    $image = $row["image"];
						     echo "<img src='assets/images/$image' height ='50%' width ='50%'>"; ?>
	                       </td>
						  <td align ="center"> <?php  
	                      echo $row["quantity"];?> </td>
						   <td align ="center"> <?php  
	                      echo $row["price"]."$";?> </td>
						  <td align ="center">
						   <a href= <?php echo "addquantity.php?id=".$row["id"]."&quan=".$row["quantity"]?>>
						   <i class="fa fa-plus-circle"></i> </a>
						  </td>
						  <td align ="center">
						   <a href=<?php echo "redquantity.php?id=".$row["id"]."&quan=".$row["quantity"]?>>
						   <i class="fa fa-minus-circle"></i></a> 
						  </td>
						   <td align ="center">
						   <a href=<?php echo "removeitem.php?id=".$row["id"]?>>
						   <i class="fa fa-trash"></i></a> 
						  </td>
						  </tr>
                          
					   
				   <?php } ?>
				   
                      </table>
			   
      
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			
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
