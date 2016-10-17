
<?php
session_start();

?>
<?php

$error=''; // Variable To Store Error Message

$rohit=$_SESSION['login_user'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";
$fs=$_POST['rating'];
$fb=$_POST['feed'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn,"UPDATE user_login SET feed_star='$fs', feedback='$fb' WHERE password='$rohit' ;");

    //end count user
?>
<html>
    <head> <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
        <script src="bootstrap/scripts/bootstrap.min.js"></script></head>
<body style="margin:0;padding:0;border:0">
    <div class="container-fluid" style="height:135px;box-shadow:0px 4px 10px #B6B6B6;">
            <div class="col-md-2"><img src="img/cluboe.jpg" style="width:100px;height:125px;margin-left:20px;margin-top:4px"></div> <div class="col-md-10 col-lg-8 col-sm-10"><h1 style="padding-top:;text-align:center;font-weight:bold;color:#729f98;">CLUB OF ELECTRONICS </h1></div>
            <div class="col-md-10 col-lg-8 col-sm-10"><p style="margin-left:-10px;text-align:center">we do it with better frequency</p></div>
            <div class="col-md-2"><li  style="text-align:right;margin-top:5px;font-size:18px;font-family:sans-serif;list-style-type:none;font-weight:bold"><a style=" text-decoration:none;color:#729f98;" href="logout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li></div>
         
        </div> <br><br><br><h1 style="text-align:center">Thank You <?php echo $_SESSION['user']; ?>!</h1><br>
   <div class="col-md-5"></div><img src="ii.png" style="height:140px;width:140px;margin-left:35px">
   
    </body>
</html>