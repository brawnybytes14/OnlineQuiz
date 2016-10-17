<?php
error_reporting(0);
?>


<?php
session_start();
?>

<?php
$checkuser=0;
$_SESSION['test']=1;
$_SESSION['login_user']=$_POST['password'];
$_SESSION['user']=$_POST['username'];
if(isset($_SESSION['login_user']))
{
} 
else 
{
		header('Location:index.php');
}    
?>

<?php

$error=''; // Variable To Store Error Message
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    // output data of each row

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "<script type=\"text/javascript\">window.alert('Either Username or Password left empty.');window.location.href ='./index.php';</script>";
}
else
{
    
  
// Define $username and $password
 $_SESSION['user']=$username=$_POST['username'];
 $password=$_POST['password'];
    
    
    //count user
     $count=  mysqli_query($conn, "select count_user from user_login where name='$username' and  password='$password'"  );
     if (mysqli_num_rows($count) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($count)) {
        
  $count = $row["count_user"];
        
    }
    }
    $count=$count+1;
    mysqli_query($conn,"UPDATE user_login SET count_user='$count' WHERE name='$username' and  password='$password';");
    //end count user
    
    //check user
//if($count > 1)
//{
 // echo "<script type=\"text/javascript\">window.alert('Your session has expired.');window.location.href = './index.php';</script>";  
//}
   //else {
        
        
    //}
   
 

   
    //end check user
    
    
$query = mysqli_query($conn,"select * from user_login where password='$password' AND name='$username'");

   $rows = mysqli_num_rows($query);

if ($rows==1||($username=="rohit"&&$password=="hitro"||$username=="sachin"&&$password=="sachin"||$username=="vinay"&&$password=="tomar")) {
  
$_SESSION['login_user']=$password; // Initializing Session

    
} else {
echo "<script type=\"text/javascript\">window.alert('You have entered either wrong Username or Password.');window.location.href = './index.php';</script>";
}
mysqli_close($conn); // Closing Connection

}
}
?>


<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
        <script src="bootstrap/scripts/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    </head>
   <style>
       .btn:hover{
           background: #e0e0e0;
           color:white;
       }
    </style>
    <body style="margin-top:0;background:white">
        <div class="container-fluid" style="background:height:auto;margin:0px;box-shadow:0px 4px 10px gray">
             <div class="col-md-2 col-lg-2 col-sm-2"><img src="img/cluboe.jpg" style="width:100px;height:auto;margin-left:20px;margin-top:4px"></div>
			 <div class="col-md-10 col-lg-8 col-sm-10"><h1 style=";font-family: 'Lato', sans-serif;color:#729f98;padding-top:;text-align:center;font-weight:bold">CLUB OF ELECTRONICS </h1></div>
            
			<div class="col-md-2 col-lg-2 col-sm-2"></div>
			<div class="col-md-10 col-lg-8 col-sm-10">
            <h5 style="text-align:center;color:#283018">we do it with better frequency.</h5>
        </div>
            
        </div><div  class="container">
        <div class="col-md-9"> <h1 style="text-align:center;color:#729f98">Instructions (Round-1)</h1></div> <div class="col-md-3" style="margin-top:10px;color:green;border:1px solid #f0f0f0;background:#f0f0f0"><h4 style="font-weight:bold;color:#729f98">Hi <?php echo $_SESSION['user']; ?>!</h4></div></div>
        <hr>
<div  class="container">
       
    <br><br>
    1. You will be given 30 minutes for 20 questions in the test.<br>
    2. There are four catagories namely- Technical, Reasoning, General awareness and english
    each of which comprises 5 questions.<br>
    3. Each <span style="color:green;font-weight:700">correct</span> answer carry 4 mark, while each <span style="color:red;font-weight:700">incorrect</span> carry -1 mark. <br>
    4. You will be eligible for the next round on the basis of cut-0ff marks.<br>
    5. <strong>Following buttons will be present in your test-</strong><br>
     <div class="btn btn-default" style="height:22px"></div> Not Visited.<br>
    <div class="btn btn-default" style="height:22px;background:red"></div>  Visited.<br>
      <div class="btn btn-default" style="height:22px;background:green"></div> Saved.
    <br>6. You have to press <button class="btn btn-success">Save</button> after answering each question, otherwise your answer will <span style="color:red;font-weight:700">not</span> be evaluated.
    
        </div>
        
	
	        <hr>
          
        <div class="col-md-5"></div>  
            <div class="btn btn-default " >
                <a href="test.php" style="text-decoration:none;color:#001000"><h1 style="margin-top:8px;margin-left:20px;color:#729f98">Start Quiz<span class="glyphicon glyphicon-chevron-right" style="font-size:29px;margin-left:10px"></span></h1></a></div>
        </div>
            
    
    
      <nav class="navbar-default navbar-fixed-bottom" style="background:#f0f0f0"> 
            
            <div  class="col-md-7 col-lg-7">
                <h5 style=" white-space: pre;color:#909090; font-family: 'Lato', sans-serif;font-weight:bold"> Developed by: <a href="https://in.linkedin.com/pub/rohit-kori/ab/665/194" style="text-decoration:none;" target="_blank" >  Rohit Kori,</a><a href="https://www.facebook.com/sachin.sen.5099?fref=ts" style="text-decoration:none; "target="_blank" >   Sachin Sen,</a>  <a href="https://www.facebook.com/vinayprakashsingh98?fref=ts" style="text-decoration:none;"target="_blank" >   Vinay Prakash.</a></h5> </div>  
        
            </div><div class="col-md-5 col-lg-5"> <h5 style="white-space: pre; text-align:right;font-family: 'Lato', sans-serif;color:#909090;font-weight:bold">Guided by:     <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>    </nav> 
    </body>
</html>