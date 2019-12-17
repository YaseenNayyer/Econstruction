<!DOCTYPE html>
<html>
<head>
	
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Construction</title>
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
            <a href="logout.php"><i class="glyphicon glyphicon-user"></i> logout</a>
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
   <!-- slider -->
   <section class="slidebar">
      <div id="carousel-example-generic" class="carousel slide adjust" data-ride="carousel">
  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="slider/sample-1.jpg" alt="">
	      <div class="carousel-caption">
	        
	      </div>
	    </div>
	    <div class="item">
	      <img src="slider/sample-2.jpg" alt="" title="">
	      <div class="carousel-caption">
	      </div>
	    </div>
      <div class="item">
        <img src="slider/sample-3.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
	    
	  </div>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
    </div>
	
   </section>

   <!-- services -->
   <section class="services">
     <div class="container" id="aboutus-container">
      <div class="main-title">
        <h2>Our <span style="color: orange;">Services</span>
        </h2>
        <div class="line"></div>
      </div>
      <!-- row 1 -->
      <div class="row alignment">
        <div class="col-md-4">
          <div class="services-box">
            <div class="service-content">
              <h4 class="service-title">Archtectural Design</h4>
              <p class="discription">
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,provident vitae! Magni tempora perferendis eum non provident.
              
              </p>
            </div>
            
          </div>
        </div>

        <div class="col-md-4">
          <div class="services-box">
            <div class="service-content">
              <h4 class="service-title">Meterials</h4>
              <p class="discription">
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,provident vitae! Magni tempora perferendis eum non provident.
              
              </p>
            </div>
            
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="services-box">
            <div class="service-content">
              <h4 class="service-title">Land buy & sale</h4>
              <p class="discription">
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,provident vitae! Magni tempora perferendis eum non provident.
              
              </p>
            </div>
            
          </div>
        </div>

     </div>
       <!-- row 2 -->
     <div class="row">
        <div class="col-md-4">
          <div class="services-box">
            <div class="service-content">
              <h4 class="service-title">Archtectural Design</h4>
              <p class="discription">
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,provident vitae! Magni tempora perferendis eum non provident.
              
              </p>
            </div>
            
          </div>
        </div>

        <div class="col-md-4">
          <div class="services-box">
            <div class="service-content">
              <h4 class="service-title">Meterials</h4>
              <p class="discription">
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,provident vitae! Magni tempora perferendis eum non provident.
              
              </p>
            </div>
            
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="services-box">
            <div class="service-content">
              <h4 class="service-title">Land buy & sale</h4>
              <p class="discription">
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,provident vitae! Magni tempora perferendis eum non provident.
              
              </p>
            </div>
            
          </div>
        </div>
     </div>
   </section>

   <section class="why-choose-us">
     <div class="container">
       <div class="row">
         <div class="col-md-6">
          <div class="wcu-title">
            <div class="main-title">
              <h2>why choose <span style="color: orange;">us</span>
              </h2>
              <div class="line"></div>
              <div class="main-discription">
                <p>
                  Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.
                </p>

              </div>
            </div>
          </div>

         </div>
         <div class="col-md-6">
          <div class="wcu-title">
            <img src="images/why choose us.jpg">
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