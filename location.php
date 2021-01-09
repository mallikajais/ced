<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>cedcab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>



<body>
    <?php include 'adminnav.php';?>
    <div class="container-fluid mauto text-center" >
        <div class="col-lg-12">
            <h2 class="text-info text-center ">Service Available Locations</h2>
            
            <table class=" table table-striped table-hover table-border " id="search" >
            <!-- <table class="table table-hover responsive nowrap" style="width:100%" id="search">     -->
            <thead>
                    <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Distance</th>
                    <th>Isavailable</th>
                    <th>Action</th>
                    </tr>
                </thead>
            <?php
                $conn = new mysqli('localhost', 'root', '','cedcab');
                $q="select*from tbl_location";
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <!-- </td>-->
                    <td><?php echo $result['id'];?></td> 
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['distance'];?>
                    
                    <td><?php echo $result['is_available'];?></td>
                    <?php 
                    $_SESSION['id']=$result['id'];
                    $result['name'];
                    $result['distance'];
                    $result['is_available'];
                    ?>
                    
                    <td><button class="btn btn-danger" > <a class="text-white" href="locdelete.php?id=<?php echo $result['id'];?>"> Delete</a></button>
                    <button class="btn btn-success" > <a class="text-white" href="edit.php?id=<?php echo $result['id'];?>"> Edit</a></button></td>
                </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
    <?php include 'footer.php';?>
    
    
    
    
    


</body>
</html>