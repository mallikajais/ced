<?php
session_start();
$username=$_POST['email'];
$name=$_POST['name'];
$mobile=$_POST['number'];
$password=$_POST['password'];
$_session['email']=$username;
$_session['name']=$name;
$_session['number']=$mobile;
$_session['password']=$password;
echo $username;

$conn = new mysqli('localhost', 'root', '','cedcab');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO tbl_user (email_id, name,mobile,status,password,	is_admin)
  VALUES ('$username', '$name', '$mobile',0,'$password',0)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  // header('location:display.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>