<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerDashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
        <a class="navbar-brand logo-margin" href="booking.php"><h3><span class='logo-color'>Ced</span>Cab</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0)" id="home-user">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cab.php">Book New Ride</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rides
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="userpending.php" id="pendingrides">Pending Rides</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="completedrides">Completed Rides</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="previousrides">All Rides</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="update.php" id="editprofile">Update Information</a>
                        <a class="dropdown-item" href="changepass.php" id="resetpassword">Change Password</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="greetings text-white">Hi <?php echo $_SESSION['name'];?></div>
                <a href="logout.php"class="btn btn-outline-info my-2 my-sm-0 " type="submit">Logout</a>
            </form>
        </div>
        </nav>
    </div>
    <div style="height:65vh;margin-top:40px;">
    <div class="row">
  <div class="column">
    <div class="card">
    <h3>Pending Rides</h3>
      <a href="userpending.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Pending Rides</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <h3>Completed Rides</h3>
      <a href="complete.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Completed Rides</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h3>All Rides</h3>
      <a href="allride.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">All Rides</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h3>Total Expanses</h3>
      <a href=""class="btn btn-outline-info my-2 my-sm-0" type="submit">Total Expanses</a>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>