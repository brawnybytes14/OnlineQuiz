
<?php
session_start();

?>
<?php
unset($_SESSION['test']);
?>




<!DOCTYPE html>
<html>
    <head>
       
        <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">
        <script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>
        <script src="bootstrap/scripts/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
        <style>
    
    .star-rating {
  font-size: 0;
  white-space: nowrap;
  display: inline-block;
        
  width: 250px;
  height: 50px;
  overflow: hidden;
  position: relative;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating i {
  opacity: 0;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 20%;
  z-index: 1;
  background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
  background-size: contain;
}
.star-rating input {
  -moz-appearance: none;
  -webkit-appearance: none;
  opacity: ;
  display: inline-block;
  width: 20%;
  height: 100%;
  margin: 0;
  padding: 0;
  z-index: 2;
  position: relative;
}
.star-rating input:hover + i,
.star-rating input:checked + i {
  opacity: 1;
}
.star-rating i ~ i {
  width: 40%;
}
.star-rating i ~ i ~ i {
  width: 60%;
}
.star-rating i ~ i ~ i ~ i {
  width: 80%;
}
.star-rating i ~ i ~ i ~ i ~ i {
  width: 100%;
}


</style>
    <script>
        $(':radio').change(
  function(){
      console.log(this.value);
    $('.choice').text( this.value + ' stars' );
  } 
)
        
        </script>
    </head>
    
    
    <body style="margin-top:0;background:white">
      <div class="container-fluid" style="height:135px;box-shadow:0px 4px 10px #B6B6B6;">
            <div class="col-md-2"><img src="img/cluboe.jpg" style="width:100px;height:125px;margin-left:20px;margin-top:4px"></div> <div class="col-md-10 col-lg-8 col-sm-10"><h1 style="padding-top:;text-align:center;font-weight:bold;color:#729f98;">CLUB OF ELECTRONICS </h1></div>
            <div class="col-md-10 col-lg-8 col-sm-10"><p style="color:;margin-left:-10px;text-align:center">we do it with better frequency</p></div>
            <div class="col-md-2"><li  style="text-align:right;margin-top:5px;font-size:18px;font-family:sans-serif;list-style-type:none;font-weight:bold"><a style=" text-decoration:none;color:#729f98" href="logout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li></div>
         
        </div>
        <h1  style="color: #787878;text-align:center">Tell us, how was your experience <?php echo $_SESSION['user']; ?>!</h1>
     
        <br>
        <form action="thanks.php" method="post" >
  <div style="text-align:center">  <span class="star-rating">
  <input type="radio" name="rating" value="1" required><i></i>
  <input type="radio" name="rating" value="2"><i></i>
  <input type="radio" name="rating" value="3"><i></i>
  <input type="radio" name="rating" value="4"><i></i>
  <input type="radio" name="rating" value="5"><i></i>
</span>
        </div>
                 

         <div class="container form-group">
  <label for="comment" ><h2 style="color: #787878;text-align:center">Add feedback</h2></label>
  <textarea class="form-control" name="feed" rows="5" id="comment" placeholder="(Optional)"></textarea>
             <br>
                         <input  class="btn btn-default"type="submit" value="Submit">

</div>
            
        </form>
                  <nav class="navbar-default navbar-fixed-bottom" style="background:#f0f0f0"> 
            
            <div  class="col-md-7 col-lg-7">
                <h5 style=" white-space: pre;color:#909090; font-family: 'Lato', sans-serif;font-weight:bold"> Developed by: <a href="https://in.linkedin.com/pub/rohit-kori/ab/665/194" style="text-decoration:none;" target="_blank" >  Rohit Kori,</a><a href="https://www.facebook.com/sachin.sen.5099?fref=ts" style="text-decoration:none; "target="_blank" >   Sachin Sen,</a>  <a href="https://www.facebook.com/vinayprakashsingh98?fref=ts" style="text-decoration:none;"target="_blank" >   Vinay Prakash.</a></h5> </div>  
        
            </div><div class="col-md-5 col-lg-5"> <h5 style="white-space: pre; text-align:right;font-family: 'Lato', sans-serif;color:#909090;font-weight:bold">Guided by:     <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>    </nav> 
    </body>
</html>

<?php

$error=''; // Variable To Store Error Message
$u=$_SESSION['user'];
$rohit=$_SESSION['login_user'];
$t= $_COOKIE['timeget'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";
$c=$_COOKIE['username'];
$i=$_COOKIE['username1'];
$c=($c*4)-$i;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn,"UPDATE user_login SET marks='$c', time='$t' WHERE password='$rohit' and name='$u';");
mysqli_query($conn, "SELECT * FROM user_login ORDER by marks DESC , time ASC;");
    //end count user
?>