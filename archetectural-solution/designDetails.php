<?php
  include("../db_connect.php");
  $id = $_GET['id'];
  $sql = "SELECT `title`, `image_1`, `image_2`, `image_3`, `discription`, `plot_area`, `building_type`, `building_style`, `badroom`, `bathroom`, `floor`, `kitchen`, `foundation_type` FROM `add_architecture` WHERE architecture_id = $id";
  $query = mysqli_query($con,$sql);
  while ($result = mysqli_fetch_assoc($query)) {
    $title = $result['title'];
    $badroom = $result['badroom'];
    $bathroom = $result['bathroom'];
    $plot_area = $result['plot_area'];
    $discription = $result['discription'];
    $image_3 = $result['image_3'];
    $building_type = $result['building_type'];
    $building_style = $result['building_style'];
    $foundation_type = $result['foundation_type'];
    $kitchen = $result['kitchen'];
    $floor = $result['floor'];
    $image_1 = $result['image_1'];
    $image_2 = $result['image_2'];
  }
?>


<!DOCTYPE html>
<html>
<head>
	
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Design Details</title>
  <meta name="description" content="website for construction">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles.css">
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
            <a href="../admin-login.php"><i class="glyphicon glyphicon-user"></i> Admin Login</a>
          </li>
          <li>
						<a href="../customer-register.php"><i class="glyphicon glyphicon-user"></i> sign up</a>
					</li>
					<li>
						<a href="../login.php"><i class="glyphicon glyphicon-user"></i> log in</a>
					</li>
          <li>
            <a href="../logout.php"><i class="glyphicon glyphicon-user"></i> logout</a>
          </li>
				</ul>
			</div><!--col-md-6 finish-->
		</div><!--top container finish-->
	</div><!--top menu finish-->
	
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
	   			 <a href="../index.php" class="navbar-brand"><img src="../images/logo.png"></a>
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
               <li><a href="../index.php">Home</a></li>
               <li><a href="viewArchetecturalDesign.php">Architectural Solution</a></li>
               <li><a href="#">Materials</a></li>
               <li><a href="../serviceUpdate/services.php">Services</a></li>
               <li><a href="real-state/realstate.php">Real State</a></li>
               <li><a href="../real-state/realstate.php">Add Property</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
        <div class="social-icon pull-right">
          <a href="#" class="fa fa-facebook"></a>
        </div>
   	</div>
   </div>
   <!-- nav bar finish -->
   <!-- slider start -->
   <section class="design-slidebar">
     <div class="container">
      <div class="row">
         <div id="myCarousel" class="carousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="architectureimg/<?php echo $image_1 ?>" style="height: 500px; width: 100%;">
      </div>

      <div class="item">
        <img src="architectureimg/<?php echo $image_2 ?>" style="width:100%;height: 500px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
      </div>
       
     </div>
   </section> <!-- slidebar finish -->
   
   <section class="plan-details">
     <div class="container">
       <div class="row">
         <div class="col-md-4">
           <div class="plan-title">
             <h2><?php echo $title ?></h2>
           </div>
         </div>
         <div class="col-md-8 left-side">
          <div class="property-room">
             
              <span class="rooms"><i class="fa fa-bed"></i> <?php echo $badroom; ?></span>
              <span class="rooms"><i class="fa fa-shower"> <?php echo $bathroom; ?> </i></span> 
              <span class="rooms"><i class="fa fa-area-chart"><?php echo $plot_area; ?> sqft</i></span> 
           </div>
           <div class="design-discription">
             <p>
               <?php echo $discription; ?>
             </p>
            </div>
           
         </div>

         

       </div>
     </div>
   </section>

   <section class="maps">
    <div class="container">
     <div class="row">
     <div class="col-md-4"> 
     <div class="home-maps">
       <div class="first-floor">
         <img src="architectureimg/<?php echo $image_3 ?>" class="image-blur" style="width: 400px; height: 500px;" on>
       </div>        
     </div>
   </div>
   </div>
   </div>
   </section>

   <section class="plan-details">
     <div class="plan-details">
       <div class="container"><!-- container start -->
         <div class="row">
           <div class="main-heading">
             <h2>Plan Details</h2>
           </div>           
         </div>

         <div class="details-table">
           <div class="row">
             <div class="col-md-4">
               <div class="discription-table">
                 <table class="table-hover">
               <tr>
                 <td width="50%" class="gneral-details">
                   <h2 >Plan Discription</h2>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Plot Area:
                 </td>
                 <td width="80%">
                   <b><?php echo $plot_area; ?> sqft</b>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Building Type:
                 </td>
                 <td width="80%">
                   <b><?php echo $building_type; ?></b>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Building Style:
                 </td>
                 <td width="80%">
                   <b><?php echo $building_style; ?></b>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Foundation Style:
                 </td>
                 <td width="80%">
                   <b><?php echo $foundation_type; ?></b>
                 </td>
               </tr>
               
             </table>
               </div>
             </div>

             <div class="col-md-5">
                <div class="discription-table">
                 <table class="table-hover">
               <tr>
                 <td width="80%" class="gneral-details">
                   <h2>Floor Details</h2>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Badroom:
                 </td>
                 <td width="80%">
                   <b><?php echo $badroom;?> Bads</b>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Bathroom:
                 </td>
                 <td width="80%">
                   <b><?php echo $bathroom;?> Bathrooms</b>
                 </td>
               </tr>
               <tr>
                 <td width="20%" class="genDetialLeft">
                   Kitchen:
                 </td>
                 <td width="80%">
                   <b><?php echo $kitchen; ?></b>
                 </td>
               </tr>
             </table>
           </div>
             </div>
             <div class="col-md-4">
               
             </div>
           </div>
         </div>
       </div><!-- container details -->
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
                  <li> <i class=" fa fa-map-marker" aria-hidden="true"></i>   
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