<?php

$link = mysqli_connect("localhost", "root", "", "econstruction");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

 <!DOCTYPE html>
<html>
<head>
  <title>Pending Ads</title>
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
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                  <span class="hide-menu"><i class="fa fa-building-o" aria-hidden="true"></i> Real State <span class="caret"></span></span>
                  </a>
                  <ul class="collapse first-level in dropdown-content" id="service" >
                    <li class="sidebar-item">
                      <a href="pendingads.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> View Pending Ads</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a href="approveads.php" class="sidebar-link">
                        <span class="hide-menu"><i class="fa fa-sticky-note"></i> View Approve Ads</span>
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

                 <li class="sidebar-item">
                  <a href="#" class="sidebar-link waves-effect waves-dark sidebar-link">
                    
                    <span class="hide-menu"><i class="fa fa-shopping-cart"></i>  E commerce</span>
                  </a>
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
      

        <div class="fluid-container">
          <div class="row">
            <div class="col-md-12" style="margin-left: -30px;  margin-top: 40px;">
             <div class="data" style="overflow-x:auto;">
                  <?php
                  $sql = "SELECT * FROM realstate_admin where statuss = 'Approve'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-striped'>";
          echo " <thead>";
            echo "<tr>";
                echo "<th>realstate Id</th>";
                echo "<th>Purpose</th>";
                echo "<th>Property Type</th>";
                echo "<th>Sub Type</th>";
                echo "<th>Select City</th>";
                echo "<th>Location</th>";
                echo "<th>Property Title  </th>";
                echo "<th>Description</th>";
                echo "<th>Price</th>";
                echo "<th>Land Area</th>";
                echo "<th>Unit</th>";
                echo "<th>Bedrooms</th>";
                echo "<th>Bathrooms</th>";
                echo "<th>phone No</th>";
                echo "<th>Cell No</th>";
                echo "<th> Email</th>";
                echo "<th>Customer ID</th>";
                echo "<th>Date Time</th>";
                echo "<th>Status</th>";
                echo "<th>Ad ID</th>";
                echo "<th>Action</th>";

     echo "</thead>";
            echo "</tr>";
             echo " <tbody>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['realstate_id'] . "</td>";
                echo "<td>" . $row['Purpose'] . "</td>";
                echo "<td>" . $row['Property_type'] . "</td>";
                echo "<td>" . $row['subtype'] . "</td>";
                echo "<td>" . $row['Select_city'] . "</td>";
                echo "<td>" . $row['Location'] . "</td>";
                echo "<td>" . $row['Property_Title'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['Price'] . "</td>";
                echo "<td>" . $row['Land_area'] . "</td>";
                echo "<td>" . $row['Unit'] . "</td>";
                echo "<td>" . $row['Bedrooms'] . "</td>";
                echo "<td>" . $row['Bathrooms'] . "</td>";
                echo "<td>" . $row['phone_no'] . "</td>";
                echo "<td>" . $row['cell_no'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['customer_id'] . "</td>";
                echo "<td>" . $row['date_time'] . "</td>";
                echo "<td>" . $row['statuss'] . "</td>";
                echo "<td>" . $row['max_num'] . "</td>";
        


        echo '<td>
                                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle-responsive" type="button" data-toggle="dropdown">Action
                                     <span class="caret"></span></button>
                                     <ul class="dropdown-menu">
          <li><a  class="edit" href="view1.php?id=' . $row['max_num'] . '">Picture</a></li>
          <li><a class="delete" href="delete_realstate.php?id=' . $row['realstate_id'] . '">Delete</a></li>
          
          
                                         </ul>
                                         </div>
                                            </div></td>';
                   echo " </tbody>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
                
             </div>
          </div>
        </div>
    
    </div>
      
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>



