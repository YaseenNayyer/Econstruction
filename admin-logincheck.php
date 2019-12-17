
<?php
include("db_connect.php");
session_start();

if(isset($_POST['Submit'])){

echo "PPPPPPP";
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM `login` WHERE `username`='$username' and `password`='$password' ";
    $loginquery=mysqli_query($con,$sql);

    $row=mysqli_num_rows($loginquery);
    
    while ($res=mysqli_fetch_array($row)) {

        $RES= $res[`username`];
      } 


    if($row == 1)
    {


       echo "loginsuccessfull";
        $_SESSION['username']=$username;
        echo $username;
        header('location:admin-panel.php');
        
        
       
    }
    else
    {
        echo "login failed";
        header('location:admin-login.php');


    }
    
    
    
    }


?>

