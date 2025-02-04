<?php 
   session_start();

   include("../php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" rel="stylesheet" />
    <link href="../css/post.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Atvi Blog.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="post.php" id="postLink" class="active">Post</a>
            <a href="account.php" id="account">Account</a>
        </nav>

        <div class="social-media">
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
    </header>
    <section class="new_post">
        <form action="" method="post">
            <input class="btn" type="submit" name="new_post">
        </form>
    </section>
    <section class="your_post">

    </section>
</body>
</html>