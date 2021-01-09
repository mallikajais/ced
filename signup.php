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
            <h2 style="margin-bottom:20px;"> Rgistration Form</h3>
            <div class="form-group ">
                <input type="text" name="name" class="form-control" id="name" placeholder="name.." required>
            </div> 
            <div class="form-group ">
                <!-- <label for="password1">Password</label> -->
                <input type="password" class="form-control" name="password" id="password" placeholder="enter password.." required>
            </div>
            <div class="form-group ">
                <input type="email" class="form-control" id="email" name='email' placeholder="Username">
                <button type="button" class="btn btn-info" onclick="sendEmail()" >Send OTP</button>
            </div>
            <div class="form-group out" >
                <h3 class="verify"></h3>
                <input type="number" class="form-control out" id="otp" placeholder="Enter OTP">
                <button type="button" class="btn btn-info out" onclick="validate()" >verify</button>
            </div>
            <div class="form-group ">
                <!-- <label for="inputEmail">Number</label> -->
                <input type="number" class="form-control" id="number" name='number' placeholder="Number">
                <button type="button" class="btn btn-info" onclick="send()" id="btn">Send OTP</button>
            </div>
            <div class="form-group in">
                <h3 class="verify"></h3>
                <!-- <label for="otp">otp</label> -->
                <input type="number" class="form-control" id="otp1" placeholder=" Enter OTP">
                <button type="button" class="btn btn-info" onclick="validate1()" >verify</button>
            </div>
            <div class="form-group  ">
            <button type="button" class="btn btn-info" id="submit" >Submit</button>
            </div>
        </form>
        <center>
    </div>
    <div class="success warning-message"></div>
    <div class="error warning-message"></div>
    
</div>
<?php include 'footer.php';?>
<script type="text/javascript">
    function sendEmail(){
        
       var email=$('#email').val();
       
        if(email!=""){
            $.ajax({
                url:"sendemail.php",
                type:'POST',
                data:{email:email }
                ,success :function(res){
                    // $('.notifiy').text("successfully send");
                    $(".out").css("display", "block");
                }
            });
        }
    }
    function send(){
       var number=$('#number').val(); 
        if(number!=""){
            $.ajax({
                url:"post.php",
                type:'POST',
                data:{number:number }
                ,success :function(res){
                    // $('.notifiy').text("successfully send");
                    $(".in").css("display", "block");
                }
            });
        }
    }
    function isNotEmpty(caller){
        if(caller.val()==""){
            caller.css('border','1px solid red');
            return false;
        }
        else{
            caller.css('border','');
            return true;
        }
    }
    function validate(){
        var otp=$('#otp').val(); 
        if(otp!=""){
            $.ajax({
                url:"otpnum.php",
                type:'POST',
                data:{otp:otp }
                ,success :function(result){
                    if(result=="otp verify"){
                        // $('.verify').text("successfully matched");
                        $(".out").css("display", "none");
                      
                    }
                    else{
                        // $('.verify').text("successfully not matched");
                        $(".out").css("display", "block");
                        
                    }
                }
            });
        }
    }
    function validate1(){
        var otp=$('#otp1').val(); 
        if(otp!=""){
            $.ajax({
                url:"otp.php",
                type:'POST',
                data:{otp:otp }
                ,success :function(result){
                    if(result=="otp verify"){
                        // $('.verify').text("successfully matched");
                        $(".in").css("display", "none");
                    }
                    else{
                        // $('.verify').text("successfully not matched");
                        $(".in").css("display", "block");
                    }
                }
            });
        }
    }

    $(document).ready(function(){
        $('#submit').click(function(){
            var email=$('#email').val(); 
            var name=$('#name').val(); 
            var number=$('#number').val(); 
            var password=$('#password').val();
            console.log(name);
            $('.notifiy').text(name);
            if((email!="")&& (name!="")&&(number!="")&&(password!="")){
                $.ajax({
                    url:"sign.php",
                    type:'POST',
                    data:{email:email,
                        name:name,
                        number:number,
                        password:password
                        }
                    ,success :function(result){
                        alert(result);
                        if(result=="New record created successfully"){
                            $('.verify').text("success");
                        }
                        else{
                            $('.verify').text("error");
                        }
                    }
                });
            }
        })
    })
</script>
</body>
</html>