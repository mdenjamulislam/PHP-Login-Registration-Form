<?php


 $host_name = "localhost";
 $user_name ="root";
 $pass = "";
 $db_name = "user_data";

 $con = mysqli_connect($host_name,$user_name,$pass) or die ('Database error!');
mysqli_select_db($con,$db_name);