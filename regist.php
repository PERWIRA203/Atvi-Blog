<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 left">
                <div class="input-box">

                <?php

                include("php/config.php");
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                
                $verify_query = mysqli_query($con, "SELECT email FROM t_user WHERE email='$email'");

                if (mysqli_num_rows($verify_query) !=0){
                    echo "<div class='message'>
                                <p>Email already exists</p>
                            </div> <br>";                            
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } 
                else {

                    mysqli_query($con, "INSERT INTO t_user(email, password, username) VALUE('$email','$password','$username')") or die("Error Occured");

                    echo "<div class='message'>
                            <p>Registration successfully!</p>
                        </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Login Now</button>";
                }
                } else {

                ?>
                    <header>Sign Up</header>
                    <form id="loginForm" action="regist.php" method="post">
                        <div class="input-field">
                            <input type="text" class="input" id="username" name="username" required autocomplete="off">
                            <label for="username">Username</label> 
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required autocomplete="off">
                            <label for="email">Email</label> 
                        </div> 
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required>
                            <label for="pass">Password</label>
                        </div> 
                        <div class="input-field">
                            <input id="buttonLogin" type="submit" class="submit" name="submit" value="Register">
                        </div> 
                    </form>
                    <div class="signin">
                        <span>Already have an Account? <a href="index.html">Log In here</a></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 side-image">
                       
                <img src="images/logo.png" alt="Logo">
                <div class="text">
                    <p>Sign Up your email and password</i></p>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>