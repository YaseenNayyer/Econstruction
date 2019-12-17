<?php
include_once("db.php");


$id=$_GET['id'];

$q="DELETE FROM `tblproduct`where `id`=$id";

mysqli_query($con,$q);   
header('location:updatematerial.php');
?>




