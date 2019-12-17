
<?php 
include('db.php');


$id=$_REQUEST['id'];
 
$sql = "UPDATE realstate_admin SET statuss = 'Approve' WHERE realstate_id='$id'";

if (mysqli_query($con, $sql)) {
echo "<script>alert('Ad has been Approved!')</script>";

echo "<script type='text/javascript'> document.location = 'pendingads.php'; </script>"; 

} else {
    echo "Error updating record: " . mysqli_error($con);
}

?>