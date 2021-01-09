<?php

$conn = new mysqli('localhost', 'root', '','cedcab');
$id=$_GET['ride_id'];
$status=2;
$q = "update  tbl_ride SET  status=$status WHERE ride_id=$id ";

mysqli_query($conn,$q);
header('location:adminpending.php');

?>