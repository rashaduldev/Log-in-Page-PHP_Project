<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <form action="submitdata.php" method="post">
            <input type="text" name="username" placeholder="Email or Phone">
            <input type="password" name="pass"  placeholder="Password">
            <input type="number" name="number" placeholder="Must Enter NID Number">
            <button>Login</button>
            <div class="row">
                <a href="#">Forget Password</a>
                <a href="#">Another</a>
                <a class="text-end" href="#">Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>