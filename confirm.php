<?php
$q = strval($_GET['q']); 
   

 $con = mysqli_connect('localhost','root','','quiz');
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con));
 }

 mysqli_select_db($con,"quiz");

mysqli_query($con,"UPDATE oracle SET name='$c', enrollment_no='$c' WHERE user_name='$rohit';");

 mysqli_close($con);
 ?>