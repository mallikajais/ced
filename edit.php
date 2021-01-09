<?php
session_start();

    $conn = new mysqli('localhost', 'root', '','cedcab');
    $id=$_GET['id'];
    $q="select*from tbl_location WHERE id=$id";
    $query=mysqli_query($conn,$q);
    while($result=mysqli_fetch_array($query)){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'adminnav.php';?>
    <div class="signup-form" style="height:62vh;margin-top:30px;">
        <center>
        <form>
            
            <div class="form-group ">
                Id<input type="text" name="id"  class="form-control" value="<?php echo $result['id'];?>" id="id" placeholder="location.." required>
            </div> 
            
            <div class="form-group ">
                Location<input type="text" class="form-control"  id="location" value="<?php echo $_SESSION['location']; ?>" name='location' placeholder="location">
                
            </div>
            <div class="form-group ">
                Distance<input type="password" class="form-control"  id="password" value="<?php echo $_SESSION['distance']; ?>" name='password' placeholder="password">
                
            </div>
            
            <div class="form-group ">
                
                Isavailable<input type="number" class="form-control" id="number" name='number' value="<?php echo $_SESSION['is_available']; ?>"placeholder="Number">
                
            </div>
            
            <div class="form-group  ">
            <input type="submit" class="btn btn-info" id="submit" value="update">
            </div>
        </form>
        <center>
    </div>
    
<?php
    }
?>
    
    
    
    <?php include 'footer.php';?>
</body>
</html>