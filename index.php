


             
<!--my code -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['name']))
{ 
$name=$_POST['name'] ;
$_SESSION['email']=$email=$_POST['email'] ;
$mobile=$_POST['mobile'] ;
$sem=$_POST['sem'] ;
$password=$_POST['password'] ;
$branch=$_POST['branch'] ;
$quer = mysqli_query($conn,"select name, password from user_login where name='$name' and password='$password'");

   $ro = mysqli_num_rows($quer);

if ($ro>=1) {
  
echo "<script type=\"text/javascript\">window.alert('User already exists');window.location.href = './index.php';</script>";
    
}
 else
    {

$cpassword=$_POST['cpassword'] ;
if($cpassword!=$password){
echo "<script type=\"text/javascript\">window.alert('Password mismatch ');window.location.href = './index.php';</script>";
}
     else{
mysqli_query($conn,"insert into user_login(`name`,`password`,`email`,`mobile_no`,`branch`,`year`) values('$name','$password','$email','$mobile','$branch','$sem');");
     }
}

}
  //end count user
?>

<script>
function rs()
    
 {

        
          
        
 
    }

    
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["password"].value;
    if (x == null || x == ""||y == null || y == "" ) {
        alert("Either name or enrollment number is empty");
        return false;
    }
}
    
</script>
<style>input:focus{
    background:linen;}</style>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
        <script src="bootstrap/scripts/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
    
    </head>
    <body style="margin-top:0;background:white">
        <div class="container-fluid" style="height:auto;margin:0px;box-shadow:0px 4px 10px gray">
             <div class="col-md-2 col-lg-2 col-sm-2"><img src="img/cluboe.jpg" style="width:100px;height:auto;margin-left:20px;margin-top:4px"></div>
			 <div class="col-md-10 col-lg-8 col-sm-10"><h1 style="margin-left:-10px;font-family: 'Lato', sans-serif;color:#729f98;padding-top:;text-align:center;font-weight:bold">CLUB OF ELECTRONICS </h1></div>
             <div class="col-md-10 col-lg-8 col-sm-10"><p style="color:#283018;margin-left:-10px;text-align:center">we do it with better frequency</p></div>
			
             <div class="col-md-2 "><li  style="text-align:right;margin-right:10px;margin-top:5px;font-size:18px;font-family:sans-serif;list-style-type:none;font-weight:bold"><a style=" text-decoration:none;color:#729f98" href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign up</a></li></div>
        </div>
            <div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"  style="background:#f0f0f0;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight:700;text-align:center;color:#729f98">Registration form</h4>
        </div>
        <div class="modal-body" style="color:#729f98">
          <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="index.php" method="post"
 role="form" >
    <div class="form-group">
      <label class="control-label col-sm-4" for="name" required>Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" required name="name" id="nm" placeholder="e.g., Sundar Pichai">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" required  name="email" id="nm" placeholder="e.g., example@example.com">
      </div>
    </div> <div class="form-group">
      <label class="control-label col-sm-4" for="email">Mobile:</label>
      <div class="col-sm-8">
        <input type="number" class="form-control" required  name="mobile" id="nm" placeholder="e.g., 895756222" max-length="10">
      </div>
    </div> <div class="form-group">
      <label class="control-label col-sm-4" for="email">Branch:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" required  name="branch" id="nm" placeholder="e.g., CSE">
      </div>
    </div>
               <div class="form-group">
      <label class="control-label col-sm-4" for="sem">Year:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  required  name="sem" id="nm" placeholder="e.g., I year">
      </div>
    </div>
              
              <div class="form-group">
      <label class="control-label col-sm-4" for="password">Password:</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" required  name="password" id="nm" >
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-4" for="email">Confirm Password:</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" required  name="cpassword" id="nm" >
      </div>
    </div>
              
   
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-default" onclick="rs();"  style="color:#729f98">Submit</button>
      </div>
    </div>
  </form>

        </div>
        <div class="modal-footer"  style="background:#f5f5f5;">
          <button type="button" class="btn btn-default" data-dismiss="modal"  style="color:#729f98">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

        
    <div class="container">  
	<div class="col-md-12">
            <h2 style="text-align:center;margin-top:10px;font-family:Arial;color:#729f98;font-size:300%,height:40px">Gray Spark</h2></div>
        
       </div>
        <div class="container" style=";margin-top:10px;width:400px;height:400px;background:#F0F0F0;box-shadow:0px 4px 2px lightgray;">
           <img src="img/user.png" style="width:100px;height:100px;margin-left:125px;margin-top:40px">  
   <form role="form" method="post" action="instruction.php" class="form-horizontal" style="margin-top:35px">
                                                    
    <div class="form-group  has-feedback">
<label for="name" class="control-label col-md-1"></label>
        
<div class="col-md-10" style="font-family: 'Droid Sans', sans-serif;">
<input type="name" class="form-control input-lg" name="username" id="name" placeholder="Enter registered name">
        </div></div>
 <div class="form-group  has-feedback">
<label for="name" class="control-label col-md-1"></label>
     
<div class="col-md-10" style="font-family: 'Droid Sans', sans-serif;">
<input type="password" class="form-control input-lg" name="password" id="password" placeholder=" Enter password">
        </div></div>



        <input type="submit" name="submit" class="btn btn-default"
         value="Log In" style="margin-left:35px;margin-top:10px;margin-bottom:15px;width:300px;height:43px;padding-top:5px;font-family: 'Droid Sans', sans-serif;font-size:20px ;"></div>
            </form></div>          
        <nav class="navbar-default navbar-fixed-bottom" style="background:#f0f0f0"> 
            
            <div  class="col-md-7 col-lg-7">
                <h5 style=" white-space: pre;color:#909090; font-family: 'Lato', sans-serif;font-weight:bold"> Developed by: <a href="https://in.linkedin.com/pub/rohit-kori/ab/665/194" style="text-decoration:none;" target="_blank" >  Rohit Kori,</a><a href="https://www.facebook.com/sachin.sen.5099?fref=ts" style="text-decoration:none; "target="_blank" >   Sachin Sen,</a>  <a href="https://www.facebook.com/vinayprakashsingh98?fref=ts" style="text-decoration:none;"target="_blank" >   Vinay Prakash.</a></h5> </div>  
        
            </div><div class="col-md-5 col-lg-5"> <h5 style="white-space: pre; text-align:right;font-family: 'Lato', sans-serif;color:#909090;font-weight:bold">Guided by:     <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>    </nav>    
</body>
</html>