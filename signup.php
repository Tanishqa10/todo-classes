<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body style="background-color:#f7ebe6">
    <?php include 'nav.php' ?>
    <div class="w3-card-4 " style="max-width:600px; margin:auto; margin-top:20vh;padding:30px; border-radius:40px;background-image:linear-gradient(#e4eaf5,#f7f7dc)">
    <h1 style="margin-left:170px;margin-top:10px; margin-bottom:20px; font-size:50px;"><b><i><u>SignUP</u></i></b></h1>
    <form action="#">
        <label style="font-family:cursive; font-size:30px;"><b><u><i class="bi-person"></i>Username</b></u></label>
        <input type="text" placeholder="username" name="username" class="w3-input" style="margin-top:20px;">
        <label style="font-family:cursive; font-size:30px;"><b><u><i class="bi-lock"></i>Password</b></u></label>
        <input type="password" placeholder="password" name="passwd" class="w3-input" style="margin-top:20px;">
        <label style="font-family:cursive; font-size:30px;"><b><u><i class="bi-check-all"></i>Confirm Password</b></u></label>
        <input type="password" placeholder="Confirm Password" name="conpass" class="w3-input" style="margin-top:20px;">
    </form>
    </div>
    
</body>
</html>