<?php 
include('db_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Customer Register</title>
  <meta name="description" content="website for construction">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
   <div><!-- main div -->
    
     <div id="top" class="nav-fixed"><!--top begin-->
		<div class="container"><!--top container begin-->
			<!--col-md-6 offer-->
			<div class="col-md-5 offer"></div>
            <!--col-md-6 offer finish-->
			<div class="col-md-7"><!--col-md-6 begin-->
				<ul class="menu">
          <li>
            <a href="admin-login.php"><i class="glyphicon glyphicon-user"></i> Admin Login</a>
          </li>
					<li>
						<a href="customer-register.php"><i class="glyphicon glyphicon-user"></i> sign up</a>
					</li>
					<li>
						<a href="login.php"><i class="glyphicon glyphicon-user"></i> log in</a>
					</li>
          <li>
            <a href="logout.php"><i class="glyphicon glyphicon-user"></i> log out</a>
          </li>
				</ul>
			</div><!--col-md-6 finish-->
		</div><!--top container finish-->
	</div><!--top menu finish-->
	
	<!-- navbar -->
  <!-- navbar -->
   <div class="brandWrap"> <!-- brandWrap start -->
      <div class="container top-margin">
        <div class="col-md-6">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           <div class="navbar-header">
           <a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
           </div>
        </div>
        <div class="col-md-6">
          <div class="nav navbar-nav">
            <div class="search-box">
            <div class="input-group">
              <input type="search" name="search" class="search" placeholder="Search your product">
              <button type="submit" name="search" class="search-button">
                  <span class="glyphicon glyphicon-search" ></span>
              </button>   
            </div>
            </div>  
          </div>
        </div>
      </div>
   </div> <!-- brandWrap finish -->

   <!-- navbar start -->
   <div id="navbar" class="navbar navbar-default">
   	<div class="container">
   		<div class="padding-nav"><!--padding-nav start-->
            <ul class="nav navbar-nav left"><!--navbar-nav start-->
               <li><a href="index.php">Home</a></li>
               <li><a href="archetectural-solution/viewArchetecturalDesign.php">Architectural Solution</a></li>
               <li><a href="#">Materials</a></li>
               <li><a href="serviceUpdate/services.php">Services</a></li>
               <li><a href="real-state/realstate.php">Real State</a></li>
               <li><a href="real-state/realstate.php">Add Property</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
        <div class="social-icon pull-right">
          <a href="#" class="fa fa-facebook"></a>
        </div>
   	</div>
   </div>
   <!-- nav bar finish -->
   
   <!-- bread crumb -->
   <div id="breadcrumb"><!--breadcrumb start-->
    <div class="container"><!--container start-->
      <div class="row">
        <div class="col-sm-12"><!--col-sm-12 start-->
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Customer Register</li>
              </ul>
      </div><!--col-sm-12 finish-->  
      </div>
      
    </div>  
  </div>
  <!-- bread crumb finish -->
  <!-- register and login page -->
  <section class="form">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h4 class="register-content">Register</h4>
          <div class="customer-register">
            <form method="post" action="" class="customer-login-form">
                <div class="label-username">
                  <label for="username" class="label-margin">Customer Name:&nbsp
                   <span class="required">*</span>
                  </label>
                </div>
                <div class="username-input">
                  <input type="text" name="customer_name" id="customer_name" required="" title="only alphabet" pattern="^[a-zA-Z\s]+$">
                </div>
                <div class="label-email">
                  <label for="email" class="label-margin">Email:&nbsp
                   <span class="required">*</span>
                  </label>
                </div>
                <div class="email-input">
                  <input type="email" name="customer_email" id="customer_email" required="" pattern="/^[a-zA-Z0-9._]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-]+)*$/">
                </div>
                <div class="label-password">
                  <label for="password" class="label-margin">Password:&nbsp
                   <span class="required">*</span>
                  </label>
                </div>
                <div class="password-input">
                  <input type="password" name="customer_pass" id="customer_pass" required="" pattern="^[ A-Za-z0-9()[\]+*%]*$">
                </div>
                <div class="label-city">
                  <label for="password" class="label-margin">Customer City:&nbsp
                   <span class="required">*</span>
                  </label>
                </div>
                <div class="city-input">
<select id="customer_city" name="customer_city" required class="form-control">
<option value="">Select City Name</option>
<?php 
$get_city="select * from cities order by city_name asc";
$run_city=mysqli_query($con,$get_city);
while($row_city=mysqli_fetch_array($run_city))
{
$city_name=$row_city['city_name'];
echo "<option value='$city_name'>$city_name</option>";
}
?>
</select>

                </div>
                <div class="label-contact">
                  <label for="contact_no" class="label-margin">Contact no:&nbsp
                   <span class="required">*</span>
                  </label>
                </div>
                <div class="contact-input">
                  <input type="text" name="customer_contact" id="customer_contact" required="" pattern="^03[0-9]{9}$">
                </div>
                <div class="label-address">
                  <label for="address" class="label-margin">Address:&nbsp
                   <span class="required">*</span>
                  </label>
                </div>
                <div class="address-input">
                  <textarea rows = "5" cols = "64" name = "customer_address" class="form-control" required=""></textarea>
                </div>
                <div class="button-login">
                  <input type="submit" name="register" id="register" value="Sign up">
                </div>
                <p>Already have an account <a href="login.php">Login</a></p>
              </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>


   
   <footer class="footer_area"><!-- footer start -->
   	 <div class="container"><!-- container start -->
   	 	<div class="row footer-row"><!-- row start -->
   	 		<div class="col-md-4">
   	 			<div class="footer-widget">
   	 				<div class="widget-title">
   	 					<h4><strong>about us</strong></h4>
   	 				</div>
   	 				<div class="text-widget">
   	 				 <p>
   	 				 	Building isn’t just a job. At the Construction Company, it is our passion. With every project we undertake, we set the bar high and provide the best people in the industry, with a true love of what we do to make our Customers’ vision a reality.
   	 				 </p>
   	 				</div>
   	 			</div>
   	 		</div>
   	 		<div class="col-md-4">
   	 			
   	 				<div class="footer-widget">
   	 					<div class="widget-title company-links">
   	 						<h4><strong>Company links</strong></h4>
   	 						<ul>
   	 							<li><a href="#aboutus-container">About Us</a></li>
   	 							<li><a href="#">Services</a></li>
   	 							<li><a href="#">FAQ</a></li>
   	 							<li><a href="#">Contact Us</a></li>
   	 						</ul>
   	 					</div>
   	 			    </div>
   	 		</div>
   	 		<div class="col-md-4">
   	 			
   	 				<div class="footer-widget">
   	 					<div class="widget-title">
   	 						<h4><strong>Contact info</strong></h4>
   	 						<ul class="cantact-info">
                  <li style="list-style-position: outside;"> <i class=" fa fa-map-marker" aria-hidden="true"></i>   
                        86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road 
                       <br> Karachi, Pakistan 
                  </li>
                  <li> <i class=" fa fa-phone" aria-hidden="true"></i>
                       (92-21)34025818-03343348028
                  </li>
                  <li> <i class=" fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#"> info@econstruction.com</a></li>
   	 						</ul>
   	 					</div>
   	 			    </div>
   	 		</div>
   	 	</div><!-- row finish -->

   	 </div><!-- container finish -->
   </footer><!-- footer finish -->

    </div><!-- <main div closed -->
   
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if (isset($_POST['register'])) {
  $customer_name = $_POST['customer_name'];
  $customer_email = $_POST['customer_email'];
  $customer_pass = $_POST['customer_pass'];
  $customer_pass = password_hash($customer_pass,PASSWORD_DEFAULT);
  $customer_city = $_POST['customer_city'];
  $customer_contact = $_POST['customer_contact'];
  $customer_address = $_POST['customer_address'];

  $qty = "INSERT INTO `customers`(`customer_name`,`customer_email`,`customer_pass`,`customer_city`,`customer_contact`,`customer_address`) VALUES ('$customer_name','$customer_email','$customer_pass','$customer_city',$customer_contact,'$customer_address')";
  $query = mysqli_query($con,$qty);
  if ($query) {
    echo "<script>alert('register successfully');</script>";
  }
}

?>