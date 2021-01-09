<?php

$conn = new mysqli('localhost', 'root', '','cedcab');
$id=$_GET['id'];
$q=" DELETE FROM tbl_location WHERE  id=$id ";
mysqli_query($conn,$q);
header('location:location.php');

?>