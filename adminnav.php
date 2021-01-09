
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
        <a class="navbar-brand logo-margin" href="javascript:void(0)"><a class="navbar-brand" href="#" style="color: #159cad;font-size: 40px;">C<span style="color:white;">ed</span>C<span style="color:white;">ab</span>
            <i class="fa fa-taxi" aria-hidden="true" style="font-size:40px;"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="admindashboard.php" id="home-admin">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rides
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)" id="riderequest">Ride Requests</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="completedridesall">Completed Rides</a>
                        <a class="dropdown-item" href="usercancel.php" id="canceledridesall">Canceled Rides</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="allridesadmin">All Rides</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="adminpending.php" id="userrequest">pending User Requests</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="approveduserrequests">Approved User Requests</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="allusers">All Users</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Location
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)" id="managelocation">Location List</a>
                        <a class="dropdown-item" href="javascript:void(0)" id="addlocation">Add New Location</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="javascript:void(0)" id="resetpassword">Change Password</a>
                        <a class="dropdown-item" href="edit.php" id="editprofile">Edit Profile</a>
                    </div>
                </li>
                
                    
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <div class="greetings text-white">Hi <?php echo $_SESSION['name'];?></div>
            <li class="nav-item"><a href="cab.php"class="btn btn-info " style="margin-right:10px;" type="submit">Book Now</a></li>
                <a href="login.php"class="btn btn-info my-2 my-sm-0" type="submit">Logout</a>
            </form>
        </div>
    </nav>
</body>
</html>