<!-- Session Start -->


<?php
include 'db.php';


?>

<?php

$id=$_REQUEST['id'];
$query = "DELETE FROM realstate_pics WHERE max_num=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
echo "<script type='text/javascript'>alert('Pictures Deleted Sucessfully!');</script>";
echo "<script type='text/javascript'> document.location = 'realstateadmin.php'; </script>";
?>
