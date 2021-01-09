<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include 'adminnav.php';?>
    <section style="height:57vh;margin-top:68px">
    <div class="row" style="margin-bottom: 52px;">
  <div class="column">
    <div class="card">
      <h3>Ride Requests</h3>
      <p></p>
      <a href="adminpending.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Ride Requests</a>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Completed Rides</h3>
      <p></p>
      <a href="admincomplete.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Completed Rides</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Canceled Rides</h3>
      <p></p>
      <a href="acancelride.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Canceled Rides</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>All Rides</h3>
      <p></p>
      <a href="user.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">All Rides</a>
    </div>
  </div>
</div>
<div class="row">
    <div class="column">
        <div class="card">
        <h3>Pending Requests</h3>
        <p></p>
        <a href="adminpending.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Pending Users Requests </a>
        </div>
    </div>
    <div class="column">
        <div class="card">
        <h3>Approved Requests</h3>
        <p></p>
        <a href="adminapprove.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Approved users Requests</a>
        </div>
    </div>
    <div class="column">
        <div class="card">
        <h3>All Users </h3>
        <p></p>
        <a href="user.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">All Users</a>
        </div>
    </div>
    <div class="column">
        <div class="card">
        <h3>Serviceable Locations</h3>
        
        <a href="location.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Serviceable Locations</a>
        </div>
    </div>

</div>
                
    </section>
    <footer>
    <?php include 'footer.php';?>
    </footer>

    
</body>
</html>