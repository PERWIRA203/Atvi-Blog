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
    <link href="../css/home.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Atvi Blog.</a>

        <nav class="navbar">
            <a href="home.php" class="active">Home</a>
            <a href="post.php" id="postLink">Post</a>
            <a href="account.php" id="account">Account</a>
        </nav>

        <div class="social-media">
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
    </header>

    <section class="search_and_sort">
            <nav class="category">
                <a href="home.php" class="active">All</a>
                <a href="home.php">Technology</a>
                <a href="home.php">Lifestyle</a>
                <a href="home.php">Education</a>
                <a href="home.php">Disaster</a>
                <a href="home.php">Health</a>
            </nav>
            <form action="index.php">
                <input type="search" name="search" aria-label="Search" placeholder="Search" class="search">
                <button type="submit" name="search_button" class="button-search">Search</button>
            </form>
    </section>

    <section class="posts">
        <p>post 1</p>
    </section>
</body>
</html>