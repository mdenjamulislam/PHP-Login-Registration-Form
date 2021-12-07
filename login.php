<?php
    include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login/user page</title>


    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Start main wrap -->
    <div class="wrap">
        <div class="page-title">
            <h2>User Login </h2>
        </div><!-- end page-title -->

        <!-- start form-wrap -->
        <div class="form-wrap">
            <img src="images/login.png" alt="Login">
            <form action="login.php" name="" method="post">
                <label for="email">Email</label>
                <input name="email" type="email" id="form" placeholder="Enter your email" required>
                
                <label for="pass">Password</label>
                <input name="pass" type="password" id="form" placeholder="Enter your Password" required>
                
                
                <input name="login" type="submit" id="button" value="LOGIN">
                
                <p>I have no account! <a href="register.php">REGISTER</a></p>
                    
            </form><!-- end form -->
        </div><!-- end form-wrap -->
    </div><!-- end wrap -->

    <?php

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "SELECT*FROM users WHERE email = '$email' AND pass = '$pass'";
        $check = mysqli_query($con,$query);

        if($check) {
            if(mysqli_num_rows($check) > 0) {
                echo "
                    <script>
                    window.location.href='home.php';
                    </script>
                    ";
            }else {
                echo "
                    <script>
                    alert('Email or password not correct!!');
                    window.location.href='login.php';
                    </script>
                    ";
            }
        }else {
            echo "
            <script>
            alert('Database error!!');
            window.location.href='login.php';
            </script>
            ";
        }
    }else {
        // login button
    }





    ?>
    
</body>
</html>