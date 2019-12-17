<?php
include("db.php");
// session start
session_start();

if(!isset($_SESSION['username']))
{header('location:login.php');}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Architecture</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="website for construction">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../admin-panel.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
  font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
    
      <div class="main-wrapper">
        <header class="topbar">
          <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
              <a href="admin-panel.php" class="navbar-brand">E-construction</a>
            </div>
            <ul class="navbar-nav float-right">
              <li class="nav-item">
                
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span><i class="fa fa-user-circle" style="font-size: 30px;padding: 10px; color: white; margin-right: 90px; padding-top: 15px;"></i></span></a>
                <ul class="dropdown-menu">
                  <li><a class="fa fa-power-off" href="../adminlogout.php"> Logout</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </header>
        <!-- sidebar -->
        <aside class="left-sidebar">
          <div  class="scroll-sidebar">
            <nav class="sidebar-nav">
              <ul class="sidebarnav">
                <li class="sidebar-item selected">
                  <a href="../admin-panel.php" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-dashboard"></i> Dashboard</span>
                  </a>
                </li>
                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Services <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="serviceadd.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Service</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="updateservices.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage Services</span>
                      </a>
                    </li>

                  </ul>
                </li>

                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-building-o" aria-hidden="true"></i> Real Estate <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="../real-state/realstateadmin.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> View Ads</span>
                      </a>
                    </li>
                  </ul>
                </li>


                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-building-o" aria-hidden="true"></i> Cities <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="../addcities.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Cities</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-building-o" aria-hidden="true"></i> Ecommerce <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="../material/materialadd.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add material</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../material/updatematerial.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage material</span>
                      </a>
                    </li>
                  </ul>
                </li>

                

                <li class="sidebar-item dropdown" data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Architectural Solution <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="../archetectural-solution/addArchetecturalDesign.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Architecture Design</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../archetectural-solution/showArchetecturalDesign.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage Architecture Design</span>
                      </a>
                    </li>

                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </aside>
      

        <div class="page-wrapper">
          <div class="container-fluid">
            
            <div class="row" style="margin-top: 20px; margin-right: 200px; margin-left: 20px;" class="border" >
              <div class="col-md-5 col-md-offset-5">
                <div class="form-group">
                  <h1 class="h1">Add Services</h1>
                  <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Service Name</label>
          <input type="text" name="Service_Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Service Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">service image</label>
          <input type="file" name="service_image" class="form-control" id="exampleInputPassword1" placeholder="">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">service type</label>
          <input type="text" name="service_type" class="form-control" id="exampleInputPassword1" placeholder="Enter servicee Type">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Service Price</label>
          <input type="text" name="Service_price" class="form-control" id="exampleInputPassword1" placeholder="Service Price">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Service Description</label>
          <input type="text" name="Service_description" class="form-control" id="exampleInputPassword1" placeholder="Enter Discription">
        </div>


        <input type="submit" name="submit" class="btn btn-primary">
    </form>
     
                </div>
            </div>
            </div>
          </div>
        </div>
    
    </div>
      
      
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>



<?php


if(isset($_POST['submit']) )
{
$Service_Name=$_POST['Service_Name'];
$service_type=$_POST['service_type'];
$Service_price=$_POST['Service_price'];
$Service_description=$_POST['Service_description'];

$name       = $_FILES['service_image']['name'];  
$temp_name  = $_FILES['service_image']['tmp_name'];  
if(isset($name)){
    if(!empty($name)){      
        $location = "service/";      
        if(move_uploaded_file($temp_name, $location.$name)){
            echo 'File uploaded successfully';
        }
    }       
}  else {
    echo 'You should select a file to upload !!';
}
if($Service_Name=="" or $service_type=="" or $Service_price=="" or $Service_description=="")
{


echo "<script>alert('Please fill all the fields')</script>";

}

else
{





$insert_service="INSERT INTO `serviceadd`(`service_name`, `service_img`, `service_type`, `service_price`, `service_Description`) VALUES ('$Service_Name','$name','$service_type','$Service_price','$Service_description')";

    $run_customer=mysqli_query($con,$insert_service);
    if($run_customer)
    {
echo"<script>alert('Service Inserted');</script>";
}

    else

    {
echo"<script>alert('error');</script>";

    }


}
}
?>