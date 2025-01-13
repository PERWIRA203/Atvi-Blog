<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <div class="logo">
                    <p>Atvi Blog.</p>
                </div>
                <div class="text">
                    <p>Log in to your Atvi Blog account</p>
                </div>
            </div>
            <div class="col-md-6 right">
                <div class="input-box">
                    <?php
                    include("php/config.php");
                    if(isset($_POST['submit'])){
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $password = mysqli_real_escape_string($con, $_POST['password']);

                        $result = mysqli_query($con, "SELECT * FROM t_user WHERE email='$email' AND password='$password'") or die("Select Error");
                        $row = mysqli_fetch_assoc($result);

                        if(is_array($row) && !empty($row)){
                            $_SESSION['valid'] = $row['email'];
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['id'] = $row['id'];
                        } else {
                            echo "<div>
                            <p class='message'>Wrong username or password</p>
                            </div> <br>";
                            echo "<a href='index.php'><button class='btn'>Go Back</button>";

                        }
                        if (isset($_SESSION['valid'])){
                            header("location: login/home.php");
                        }
                    }else{

                    ?>
                    <header>Log In</header>
                    <form id="loginForm" action="login.php" method="post">
                        <div class="input-field">
                            <input type="text" class="input" name="email" id="email" required autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field">
                            <input type="password" class="input" name="password" id="password" required>
                            <label for="pass">Password</label>
                        </div> 
                        <div class="input-field">
                            <input type="submit" class="submit" name="submit" value="Login" id="button-login">
                        </div> 
                    </form>
                    <div class="signin">
                        <span>Don't have an Account? <a href="regist.php">Sign Up here</a></span>
                    </div>
                </div>
            </div>
            <?php } ?>  
        </div>
    </div>
  </div>
</body>
</html>
