<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="homecust.php">Stores
                <span class="sr-only"></span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
      
          </ul>
        </div>
      </div>
    </nav>
	
<div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>






    <!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Products </h1>
			  
			   <?php
             include "connection.php";
			 session_start();
			  $custid = $_GET["custid"];
			 $sql4 = "SELECT * FROM `customer_order` WHERE `customer_id`= $custid;"; //to see if the customer has started a cart
             $stmt4 = $connection->prepare($sql4);
             $stmt4->execute();
             $result4 = $stmt4->get_result();
             $row4 = $result4->fetch_assoc();
              
            if(!empty($row4) && $row4["started"]!= 0 ){
				$id = $_SESSION['orderid'] ;
				?>
				
                   <a href= <?php echo "ViewCart.php?orderid=".$id  ?> > View Cart </a>
            </div>
          </div>
         
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">
	      
	   <div class="row posts">
	   
	        
				  
			<?php }
			 
			 
			 
			 
			 $id = $_GET["id"];
			 $_SESSION["storeid"]=$id;
			 $custid = $_GET["custid"];
			 $sql2 = "select * from products where store_id =$id;"; 
             $stmt2 = $connection->prepare($sql2);
             $stmt2->execute();
             $result = $stmt2->get_result();
				   while($row = $result->fetch_assoc()){
					 $id = $row["id"];
					  $name= $row["name"];
					   $img = $row["image"];
					   $quan= $row["quantity"];
					   $price = $row["price"];
					  ?>
            <div id="1" class="item new col-md-4">
			   <a href= <?php echo "single-product.php?id=".$id ."&custid=".$custid ?> >
						    
                <div class="featured-item">
				<?php 
				$image = $row["image"];
				echo "<img src='assets/images/$image'>"; ?>
                  <h4><?php echo $row["name"];?></h4>
                  <h6><?php echo $row["price"]." $";?></h6>
                </div>
              </a>
            </div>
				   <?php } ?>
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>


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