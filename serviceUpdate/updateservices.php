
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
  <title>Show Architecture Details</title>
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
                  <a href="" class="sidebar-link waves-effect waves-dark sidebar-link">
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
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    <span class="hide-menu"><i class="fa fa-globe fa-lg"></i> Ecommerce <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="../material/materialadd.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> Add material</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="../material/updatematerial.php" class="sidebar-link">
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
          <th>service Name</th>
          <th>service type</th>
          <th>price</th>
          <th>description</th>
          <th>Image</th>
          
          <th>update</th>
          <th>Delete</th>

        
<!-- 
          <li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li> -->
      </tr>
      <?php
$sql1="SELECT * FROM `serviceadd`";
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

$sql="SELECT * FROM `serviceadd`  Limit $this_page_first_result,$result_per_page";


$result=mysqli_query($con,$sql);

while ($res=mysqli_fetch_array($result)) {
  

  ?>

    <tr class="text-center">
      <td><?php echo $res['service_id']; ?></td>        
      <td><?php  echo $res['service_name'];?></td>
      <td><?php echo $res['service_type'];?></td>
      <td><?php echo $res['service_price'];?></td>
      <td><?php echo $res['service_Description'];?></td>
            <th style="width:200; height:200;"><img src="service/<?php echo $res['service_img'];?>" style="width:200px;height:200px"></th>
      
      <td><button class="btn-danger btn"><a class="delete_link" href="delete.php?service_id=<?php echo $res['service_id']; ?> " style="color:white;"  class="text-white">Delete</a></button></td> 
      <td><button class="btn-warning btn text-white" id="a" ><a href="update.php?service_id=<?php echo $res['service_id']; ?>" style="color:white;">Edit</a></button></td>



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