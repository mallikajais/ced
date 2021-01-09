<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'nav.php';?>
    <div>
        <div class="container" style="margin-top:60px;height:60vh;">
        <center>
        <form action="/action_page.php">
            <div class="form-group">
            Username <input type="email" class="form-control" id="email" placeholder="Enter username" name="email">
            </div>
            <div class="form-group">
            
            old Password <input type="password" class="form-control" id="old" placeholder="Enter old password" name="old">
            </div>
            <div class="form-group ">
            
            New password <input class="form-control" type="password" id="new" name="new" placeholder="Enter new password">
            
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        <center>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>