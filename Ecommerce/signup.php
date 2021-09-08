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
<h1 align="center" style="color: #1e8c6e;"> Sign Up </h1>
<br>

   <div class="container">
            <p style ="color :red">  <?php
                    if (!empty($_SESSION["flash"])){
                    $x = $_SESSION["flash"];
                    echo $x;
					 $_SESSION["flash"]="";} 
               
            ?></p>
              <form id="subscribe" action="signup1.php" method="POST" align ="center">
              <div class="row mt-5">
                <div class="col-md-6">
				 <p id="hide1" ></p>
                 <input
                      required
                     
                      type="text"
                      name="first_name"
                      id="first_name1"
					  placeholder="First Name"
                    />
					
                  </div>
              
                <div class="col-md-6">
                 <p id="hide2" ></p>
                 <input
                    
                      required
                     
                      type="text"
                      name="last_name"
                      id="last_name1"
					  placeholder="Last Name"
                    />
					
                </div>
              </div>
			    
              <div class="row  mt-5">
                <div class="col-md-6 "> 
 				  <p id="hide3" ></p>
                    <input

                      required
                      id="email"
                      type="email"
                      name="email"
					  placeholder="Email"
                    />
			
                  </div>
                <div class="col-md-6">
				    <p id="hide4" ></p>
                    <input

                      required
                      id="phone"
                      type="text"
                      name="phone"
					  placeholder="Phone Number"
                    />
				
                  </div>
                </div>
             
              <div class="row  mt-5">
                <div class="col-md-6">
				 <p id="hide5" ></p>
                    <input
                   
                      required
                      type="password"
                      name="password"
                      id="password"
					  placeholder ="Password"
                    />
                  </div>
                <div class="col-md-6">
				<p id="hide6" ></p>
                      <input
                  
                      required
                      type="password"
                      name="confirmPassword"
                      id="confirmPassword"
					  placeholder ="Confirm Password"
					  
                    />
                  </div>
                </div>
     
              <div class="row  mt-5" >
			   
               
                <div class="col-md-6">

                      <label class="radio-container m-r-45"
                        >Male
                        <input type="radio" checked="checked" name="gender" value="0"/>
                        <span class="checkmark"></span>
                      </label>
                      <label class="radio-container"
                        >Female
                        <input type="radio" name="gender" value="1"/>
                        <span class="checkmark"></span>
                      </label>
                    </div>
              
			  
				
				  <div class="col-md-6">
				<label class="radio-container m-r-45"
                        >Customer
                        <input type="radio" checked="checked" name="user_type" value="0"/>
                        <span class="checkmark"></span>
                      </label>
                      <label class="radio-container"
                        >Store Owner
                        <input type="radio" name="user_type" value="1"/>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>
				
		
              <div class="row  mt-5">
			  <div class="col-md-12 align_self_center" >
                  <select name="city" required>
                    <option disabled selected value>Choose City</option>
                    <option>Beirut</option>
					<option>Jounieh</option>
					<option>Jbeil</option>
					<option>Tripoli</option>
					<option>Bekaa</option>
					<option>Nabatieh</option>
                    
                  </select>
                  <div class="select-dropdown"></div>
                </div>
				</div>
				<div class="row  mt-5">
			  <div class="col-md-12 align_self_center" >
                      <fieldset>
                <button type="submit" id = "signbutton">Sign Up</button>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				</fieldset>
              </div>
			  </div>
            </form>
          </div>
        

   
        
<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	  <script type="text/javascript"src="js/script.js"></script>

    
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
