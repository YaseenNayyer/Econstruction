
<?php
include("db.php");
session_start();

$name=$_SESSION['username'];

if(!isset($_SESSION['username']))
{header('location:index.php');}

$result_per_page=10;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Material</title>
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

                <li class="sidebar-item">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-home"></i> Real State</span>
                  </a>
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
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i>Ecommercce <span class="caret"></span></span>
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
      

       <div class="fluid-container">
          <div class="row">
            <div class="col-md-12" style="margin-left: -30px;  margin-top: 40px;">
             <div class="data" style="overflow-x:auto;">
                               <table class="table table-striped table-hover table-bordered">
      <tr class="bg-dark  text-white  text-center">
          <th>#</th>        
          <th>Name</th>
          <th>code</th>
          <th>Product price</th>
          
          <th>image</th>
          <th>product Type</th>
          <th>Update</th>
          <th>Delete</th>
          

        
<!-- 
          <li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li> -->
      </tr>
      <?php
$sql1="SELECT * FROM `tblproduct`";
$result1=mysqli_query($con,$sql1);
 $number_of_results=mysqli_num_rows($result1);

 
 

      ?>

<?php



 $number_of_pages=ceil($number_of_results/$result_per_page);
if(!isset($_GET['page']))
{

$page=1;

}
else
{

$page=$_GET['page'];

}



$this_page_first_result=($page-1)*$result_per_page;

$sql="SELECT * FROM `tblproduct`  Limit $this_page_first_result,$result_per_page";


$result=mysqli_query($con,$sql);

while ($res=mysqli_fetch_array($result)) {
  

  ?>

    <tr class="text-center">
    <th><?php echo $res['id']; ?></th>        
      <th><?php echo $res['name']; ?></th>        
      <th><?php  echo $res['code'];?></th>
      <th><?php echo $res['price'];?></th>
      <th style="width:200; height:200;"><img src="product-images/<?php echo $res['image'];?>" style="width:200px;height:200px"></th>
      <th><?php echo $res['prodtype'];?></th>
    
      
      <th><button class="btn-danger btn"><a class="delete_link" href="deletematerial.php?id=<?php echo $res['id']; ?> " style="color:white;"  class="text-white">Delete</a></button></th> 
      <th><button class="btn-success btn text-white" id="a" ><a href="materialupdate.php?id=<?php echo $res['id']; ?>" style="color:white;">Update</a></button></th>



  </tr>















<?php

}

 if($page>1)
 {
   echo '<div class="pagination">
  


   <a href="updateservices.php?page='.($page-1).'">Previous</a>





  
  
     </div>';

 }


for($i=1;$i<=$number_of_pages;$i++)
{
/*   echo '<div class="pagination">
  


  <a href="index-3.php?page='.$i.'">'.$i.'</a>





  
  
   </div>';
 */
 
}

if($i>$page)
 {
  /*  echo '<div class="pagination">
  


   <a href="index-3.php?page='.($page+1).'">Next</a>





  
  
     </div>'; */

 }




?>



    </table>      
             </div>
          </div>
        </div>
    
    </div>
      
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

