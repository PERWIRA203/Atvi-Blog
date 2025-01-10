<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">Atvi Blog.</a>

        <nav class="navbar">
            <a href="index.php" class="active">Home</a>
            <a href="post.php" id="postLink">Post</a>
            <a href="login.php" id="logoutLink">Login</a>
        </nav>

        <div class="social-media">
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
    </header>

    <section class="search_and_sort">
            <form action="index.php">
                <input type="search" name="search" aria-label="Search" placeholder="Search" class="search">
                <button type="submit" name="search_button" class="button-search">Search</button>
            </form>
            <form action="index.php">
                <select class="select">
                    <option value="">All
                    <option value="">Title A-Z
                    <option value="">Title Z-A
                </select>
            </form>
    </section>

    <section class="posts">
        <p>post 1</p>
    </section>
</body>
</html>