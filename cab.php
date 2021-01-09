<?php 
session_start();
$conn = new mysqli('localhost', 'root', '','cedcab');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    
</head>
<body style="margin-right:0px;overflow-x: hidden">

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="#" style="color: #159cad;font-size: 55px;">C<span style="color:white;">ed</span>C<span style="color:white;">ab</span>
            <i class="fa fa-taxi" aria-hidden="true" style="font-size:50px;"></i></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="customerdashboard.php"><b>Dashboard</b><span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Contact Us</b></a>
                    </li>
                    
                </ul> 
                
            </div>
        </nav>
    </div>

    <div>
    <section class="bgimg">
    
        <div class="text-center">
            <b style="font-size:40px;padding-top:10px;">Book a Ced Cab to your destination in town</b>
        </div>
        <div class="text-center" style="color:white;font-size:30px;padding-top:10px;">Choose from a range of categories and prices</div>
        <div class="row" style="width:96%;margin-left: 0%;">
            <div class="col-md-6 col-sm-12 col-ms-6" style="margin-left:15px;margin-bottom:30px;padding-top:20px;width:75%;background-color:#0000004a;padding-left:35px;">
                <div class="text-center" ><a href="#" class="btn btn-info ">Ced Cab</a></div>
                <div class="text-center" ><b style="font-size:30px;">Your everyday travel partner AC Cabs for point to point travel</b></div>
                <div>
                    
                    <form method="post">
                        <label>Pick UP</label>
                        <select class="form-control" id="pickup"  onchange="disdrop1();">
                            <option>Select Current location</option>
                            <?php
                                $query = "SELECT * FROM tbl_location";
                                $query_run = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($query_run)) {
                                    echo "<option value='".$row['name']."'>".$row['name']."</option>";
                                }
                            ?>
                        </select>
                        <label>Drop</label>
                        <select class="form-control" id="drop" onchange="disdrop();">
                            <option value="" selected disabled>Select destination </option>
                            <?php
                                $query = "SELECT * FROM tbl_location";
                                $query_run1 = mysqli_query($conn, $query);
                                while ($row1 = mysqli_fetch_array($query_run1)) {
                                    echo "<option value='".$row1['name']."'>".$row1['name']."</option>";
                                }
                            ?>
                        </select>

                        <label>Cab Type:</label>
                        <select class="form-control" id="cabtype" onchange="luggage()">
                            <option >Select cabtype</option>
                            <option>CedMini</option>
                            <option>CedMicro</option>
                            <option>CedRoyal</option>
                            <option>CedSUV</option>
                        </select>

                        <div class="">
                            <label ></label>
                            <input type="text" class="form-control"  onkeypress="return num(this, event);" placeholder="Enter your luggage weight "  id="weight" name="test" min=0 oninput="validity.valid||(value='');" >
                        </div>
                        <button type="button" class="btn btn-info" id="send" data-toggle="modal" data-target="#myModal" style="width:100%;text-align:center;margin:2% 0 8% 0">
                        Book Now
                        </button>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <!-- <h4 class="modal-title">Your fare calculation </h4> -->
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <div class="modal-body" >Your ride has been book but approval is needed from admin</div>
                                    <div class="modal-footer">
                                        <a href="customerdashboard.php"><button type="button" class="btn btn-info" data-dismiss="modal" onClick="window.open('customerdashboard.php')" >  ok  </button></a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="window.location.reload()">Cancel</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    
    </section>
    
    <footer class="footer ">
        <div class="row text-center">
            <div class="col-md-4 col-sm-4 text-center" style="font-size: 45px;color: white;" >
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
            <div class="col-md-4 col-sm-4 text-center" >
                <div style="font-size: 33px;color:  #00BCD4;">Ced Cab</button></div>
                <div style="color: #00BCD4;" >
                    <i class="fa fa-taxi" aria-hidden="true" style="font-size:20px;">Book your cab here..</i></div>
            </div>
            <div class="col-md-4 col-sm-4 text-center" style="margin-top: 20px;color: #00BCD4;">
                <h5>Copyright © 2018 | Ced Cab | All Rights Reserved</h5>
            </div>
        </div>
    </footer>  
    <div>
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    function luggage(){
        if (document.getElementById("cabtype").value=="CedMicro"){

            document.getElementById("weight").disabled=true;
            document.getElementById("weight").style.display = 'none';
            document.getElementById('weight').value = ''
            
        }
        else{
            document.getElementById("weight").disabled=false;
            document.getElementById("weight").style.display = ''; 
            document.getElementById('weight').value = ''
        }
    }
    
    function disdrop(){
        $("#drop option").each(function(){
            if($("#pickup option:selected").val() == $(this).val())
                $(this).attr("disabled", "disabled");
            else
                $(this).removeAttr("disabled");
        });
    }
    
    function disdrop1(){
        $("#drop option").each(function(){
            if($("#pickup option:selected").val() == $(this).val())
                $(this).attr("disabled", "disabled");
            else
                $(this).removeAttr("disabled");
        });
    }
    function num(txt, evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode == 46) {
            if (txt.value.indexOf('.') === -1) {
            return true;
            } else {
            return false;
            }
        } else {
            if (charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return false;
        }
        return true;
    }
    
    $(document).ready(function(){
    $("#send").click(function(){
        var pickup=$('#pickup').val();
        var drop=$('#drop').val();
        var cabtype=$('#cabtype').val();
        var weight=$('#weight').val();
        if(pickup=='Select Current location'){
            $('#result').text("please select your current location ");
        }
        else if(drop==''){
            $('#result').text("please select your destination");
        }
        else if(cabtype=='Select cabtype'){
            $('#result').text("please select cabtype");
        }
        else{
        $.ajax({
        type:"POST",
        url:"book.php",
        data:{pickup:pickup,drop:drop,cabtype:cabtype,weight:weight},
        success:function(data){
            $('#result').html(data);
        }
        });
        }
    });
    });
    function submit(){

    }
    </script>
</body>
</html> 