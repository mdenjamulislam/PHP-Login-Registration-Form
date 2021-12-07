<?php
    include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>reg/user page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
        <div class="page-title">
            <h2>Registration user</h2>
        </div>
        <div class="form-wrap">
            <img src="images/reg.png" class="img">
            <form action="register.php" method="POST">
                <label>Name</label>
                <input name="name" type="text" id="form" placeholder="Enter your name" required>
                
                <label>Email</label>
                <input name="email" type="email" id="form" placeholder="Enter your email" required>
                
                <label>Password</label>
                <input name="pass" type="password" id="form" placeholder="Enter your Password" required>
                
                <label>Confirm Password</label>
                <input name="cpass" type="password" id="form" placeholder="Confirm your Password" required>
                
                

                <input name="signup" type="submit" id="button" value="SIGN-UP">
                
                <p>Already an account! <a href="login.php">BACK TO SIGN-IN</a></p>
                


            </form><!-- end form -->
        </div><!-- end form-wrap-->

        <?php
        
        if(isset($_POST['signup'])){
			
			$name = $_POST['name'];
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$cpass = $_POST['cpass'];
			
			if($pass==$cpass){
				
				$query= "SELECT*FROM users WHERE email='$email'";
				$query_run= mysqli_query($con,$query);

				if($query_run){
					
					if(mysqli_num_rows($query_run) >0){
						
						echo "
                        <script>
                        alert('User ALready Registered ');
                        window.location.href='login.php';
                        </script>
                        ";
						
					}else{
						
			            $insertion= "INSERT INTO users VALUES('$name','$email','$pass')";
						$insertion_run = mysqli_query($con,$insertion);
						if($insertion_run ){
							echo "
                            <script>
                            alert('Registration Successful ');
                            window.location.href='home.php';
                            </script>
                            ";
						}else{
							echo "
                            <script>
                            alert('Registration Failed  ');
                            window.location.href='register.php';
                            </script>
                            ";
						}
						
					}
				}else{
					echo "
                    <script>
                    alert('Database Problem');
                    window.location.href='register.php';
                    </script>
                    ";
				}
			}
			else{
				echo "
				<script>
				alert('Password & Confirm Password not match');
				window.location.href='register.php';
				</script>
				";
			}
		}
		else{
			
			
		}
        
        
        
        
        
        ?>
    
</body>
</html>