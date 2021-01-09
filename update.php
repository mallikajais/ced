<?php
session_start();
$conn = new mysqli('localhost', 'root', '','cedcab');

// $_SESSION['user_id'];
$_SESSION['username'];
$_SESSION['name'];
$_SESSION['number'];
$_SESSION['password'];
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include 'header.php';?>
<div>
    <div class="signup-form" style="height:62vh;margin-top:30px;">
        <center>
        <form>
            <h2 style="margin-bottom:20px;"> Update Information</h3>
            <div class="form-group ">
                <input type="text" name="name"  class="form-control" value="<?php echo $_SESSION['name']; ?>" id="name" placeholder="name.." required>
            </div> 
            
            <div class="form-group ">
                <input type="email" class="form-control" disabled id="email" value="<?php echo $_SESSION['username']; ?>" name='email' placeholder="Username">
                
            </div>
            <div class="form-group ">
                <input type="password" class="form-control"  id="password" value="<?php echo $_SESSION['password']; ?>" name='password' placeholder="password">
                
            </div>
            
            <div class="form-group ">
                
                <input type="number" class="form-control" id="number" name='number' value="<?php echo $number; ?>"placeholder="Number">
                
            </div>
            
            <div class="form-group  ">
            <input type="submit" class="btn btn-info" id="submit" value="update">
            </div>
        </form>
        <center>
    </div>
    <div class="success warning-message"></div>
    <div class="error warning-message"></div>
    
</div>
<?php include 'footer.php';?>
<?php

if (isset($_POST['update'])) {
$id=$_GET['id'];
$password=$_POST['password'];
$email=$_POST['email'];
$name = $_POST['name'];
$mobile = $_POST['number'];


$q = "update  info SET  name='$name', email_id='$email',

mobile='$mobile',password='$password' WHERE id=$id ";

                
$query=mysqli_query($conn,$q);
header('location:display.php');
}
?> 
</script>
</body>
</html>