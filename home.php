<?php
    include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User reg & log-in</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- start main wrap -->
    <div class="wrap home-wap">
        <div class="header_00">
            <div class="cover_pic">
                <h2 class="profile-title">Web to My Web Development</h2>
                <p>HTML, CSS, PHP, Mysqli project</p>
                <figure class="profile_pic">
                    
                </figure>
            </div><!-- end cover_pic -->
        </div><!-- end header_00 -->
        
        <!-- start form wrap -->
        <div class="form-wrap home-wap">
            <form action="home.php" method="POST">
                <input name="logout" type="submit" id="button" value="Log Out">
            </form>
        </div>
    </div><!-- end wrap -->

    <?php

    if(isset($_POST['logout'])) {
        echo "
            <script>
            alert('You are successfully logout!');
            window.location.href='login.php';
            </script>
            ";
    }else {
        // botton check
    }



    ?>
    
</body>
</html>