<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!--custom css file link -->
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div class="container">
        <div class="container">
            <h3 class="hh">hi, <span class="sh">admin</span></h3>
            <h1 class="hi">welcome <span class="si"><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p class="hj">this is an admin page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
</body>
</html>