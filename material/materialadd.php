<?php
include("db.php");




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
              <a href="../admin-panel.php" class="navbar-brand">E-construction</a>
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
                      <a href="../serviceUpdate/serviceadd.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Service</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../serviceUpdate/updateservices.php" class="sidebar-link">
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
                      <a href="../real-state/realstateadmin.php.php" class="sidebar-link">
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
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Ecommerce <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="materialadd.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Material</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="updatematerial.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Manage Material</span>
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
                      <a href="addArchetecturalDesign.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add Architecture Design</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="showArchetecturalDesign.php" class="sidebar-link">
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
                  <h1 class="h1">Add Material</h1>
                <form method="post" enctype="multipart/form-data">
                

<div class="form-group">
  <label for="exampleInputPassword1">Product Name</label>
  <input type="text" name="product_name" class="form-control" id="exampleInputPassword1" placeholder="Enter servicee Type">
</div>

<div class="form-group">
  <label for="exampleInputPassword1">product image</label>
  <input type="file" name="product_image1" class="form-control" id="exampleInputPassword1" placeholder="">
</div>

<div class="form-group">
  <label for="exampleInputPassword1">product Price</label>
  <input type="text" name="product_price" class="form-control" id="exampleInputPassword1" placeholder="Enter servicee Type">
</div>


<div class="form-group">
  <label for="exampleInputPassword1">Product Type</label>
  <input type="text" name="prodtype" class="form-control" id="exampleInputPassword1" placeholder="Enter Discription">
</div>

  <div class="form-group">
  <label for="exampleInputPassword1">Product Code</label>
  <input type="text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Enter Discription">
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
  
$name1=$_POST['product_name'];
$product_price=$_POST['product_price'];
$code=$_POST['code'];
$prodtype=$_POST['product_price'];

$name       = $_FILES['product_image1']['name'];  
$temp_name  = $_FILES['product_image1']['tmp_name'];  
if(isset($name)){
    if(!empty($name)){      
        $location = "product-images/";      
        if(move_uploaded_file($temp_name,$location.$name)){
            echo 'File uploaded successfully';
        }
    }       
}  else {
    echo 'You should select a file to upload !!';
}




if( $name1=="" or $product_price=="" or $code=="" or $prodtype=="")
{
  

echo "<script>alert('Please fill all the fields')</script>";

}

else
{

$insert_service="INSERT INTO `tblproduct`(`name`,`code`,`image`,`price`,`prodtype`) VALUES ('$name1','$code','$name','$product_price','$prodtype')";

    $run_customer=mysqli_query($con,$insert_service);
    if($run_customer)
    {
echo"<script>alert('material Inserted');</script>";
}

    else

    {
echo"<script>alert('error');</script>";

    }


}
}
?>