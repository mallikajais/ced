<?php
session_start();
$conn = new mysqli('localhost', 'root', '','cedcab');
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$username;
$_SESSION['password']=$password;


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $q="select*from tbl_user where email_id='$username' and password='$password'";
  // $_SESSION['name']='name';
  
  $query=mysqli_query($conn,$q);
  $check = mysqli_fetch_array($query);
  $sql = "SELECT * FROM `tbl_user` WHERE  email_id='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  //     // output data of each row
      while($row = $result->fetch_assoc()) {
          // echo  $row["user_id"]. " - Name: ". $row["name"]. " " . $row["mobile"] ;
          $_SESSION['name']=$row["name"];
          $_SESSION['number']=$row["mobile"];
          if(($username=='admin@gmail.com')&&($password=='Password123$')){
            header('location:admindashboard.php');
          }
          else{
            if(($username==$row["email_id"])&&($password==$row["password"])){
              header('location:customerdashboard.php');
            }
            else {
              echo "<script>alert('invalid emailid or password')</script>";
            }
          }
      }
  } else {
      echo "0 results";
  }
  
    
    
  
}
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
  <style>
    .form-group{
        width:80%;
        
        margin-bottom: 15px;
        margin-left:0px;
    }
    h2{
      color:#0d47a1;
      margin-top:40px;
      margin-bottom:40px;
      text-align:center;
    }
    .form-control{
        margin-left:0px;
    }
    
</style>
</head>
<body style="margin-right:0px;overflow-x: hidden">
    <?php include 'header.php'; ?>
    
        <div style="height:57vh;">
            <h2 style="margin-top:60px;">Admin Login</h2>
            <center>
            <form  method="post">
            
            <div class="form-group ">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username">
            </div>
            <div class="form-group ">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
            </div>
            <div class="form-group ">
            
            <input type="submit" class="btn btn-info " name="submit" value="Log In">
            </div>
            
            </form>
            </center>
        </div>
   
<?php include 'footer.php';?>
</body>
</html>