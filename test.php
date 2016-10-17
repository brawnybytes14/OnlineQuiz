<?php
// Start the session
session_start();
$_SESSION["correct"]=0;


?>
<?php

if(isset($_SESSION['login_user']))
{
	
} 
else 
{
		header('Location:index.php');
}    
?>

<?php

 

if(isset($_SESSION['test'])) {
	
		
}   else{
    
    header('Location:demo.php');
} 

?>



<!DOCTYPE html>
<html>
<head>
   
<script>

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}



</script>
<!--endd cookie-->
           <link rel="stylesheet" href="bootstrap/styles/bootstrap.min.css">

<!-- jQuery library -->
<script src="bootstrap/scripts/jquery-2.1.4.min.js"></script>

    
<!-- Latest compiled JavaScript -->
<script src="bootstrap/scripts/bootstrap.min.js"></script>

    <script>
        
   window.onbeforeunload = function() 
  {
        return "Don't leave this page, if you are not sure" ;
    }
</script>

     <script>
          var cars = new Array();
        function ss()
        {
            
        
         var i;
       var correct=0;
        var incorrect=0;
      for (i = 1; i <=30; i++)
{
       if(cars[i]==2)
    {
        correct++;
    }
       else if(cars[i]==1)
    {
    
      incorrect++;
    }
    
}
              setCookie("username", correct, 30);
              setCookie("username1",incorrect,30);
            
  document.getElementById("demo").innerHTML = correct;
  document.getElementById("demo2").innerHTML = incorrect;
        }
    
         function sac(a,q)
        { 
              document.getElementById(q).style.background = "#6EB84A";
           var x=$('input[type="radio"]:checked').val();
            if(x==null)
            {
                cars[q]=0;
            }
            else
            {
            if(a==x)
           {
               cars[q]=2;
           }
            else
            {  
                cars[q]=1;
            }
           }
        }
    $(function() {
    
   $("#sortable1 li").not('.emptyMessage').click(function() {
       document.getElementById(this.id).style.background = "red";
       document.getElementById(this.id).style.color = "white";
        
           showUser(this.id);
   });
});
    
</script>
<script>
  
function showUser(str) {
     
    
    if (str == "") {
                        
        
         if(str<=10)
         {
          document.getElementById("txtHint").innerHTML = "";

         }
        else if(str>=11 && str<=20){                                 
            document.getElementById("txtHint1").innerHTML = "";
        }
        else if(str>=21 ){ 
            document.getElementById("txtHint2").innerHTML = "";
       }
        
        
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
            
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if(str<=10){
                                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

                }else if(str>=11 && str<=20){
                                    document.getElementById("txtHint1").innerHTML = xmlhttp.responseText;

                }else if(str>=21){
                                    document.getElementById("txtHint2").innerHTML = xmlhttp.responseText;

                }
            }
        }
        xmlhttp.open("GET","pyar.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
    <link rel="stylesheet" href="stylecalc.css">
    <script  src="script.js"></script>
</head>
<body style="margin-top:0">

  <div class="container-fluid" style="height:135px;box-shadow:0px 4px 10px #B6B6B6;">
            <div class="col-md-2"><img src="img/cluboe.jpg" style="width:100px;height:125px;margin-left:20px;margin-top:4px"></div>
       <div class="col-md-10 col-lg-8 col-sm-10"><h1 style="color:#729f98;text-align:center;font-weight:600">Gray Spark</h1></div>
            <div class="col-md-offset-1 col-sm-7 " style=" text-align:center">
             <ul  class=" nav nav-pills" style=" text-align:center;font-size:15px;list-style-type:none;font-weight:bold">

    <li class="active"><a data-toggle="pill" href="#home">TECHNICAL</a></li>
    <li><a data-toggle="pill" href="#menu1">REASONING</a></li>
    <li><a data-toggle="pill" href="#menu2">GENERAL AWARENESS</a></li>
    <li><a data-toggle="pill" href="#menu3">ENGLISH</a></li>
  </ul></div>
            <div class="col-md-2"><li  style="text-align:right;margin-top:5px;font-size:18px;font-family:sans-serif;list-style-type:none;font-weight:bold"><a style=" text-decoration:none;color:#729f98;" href="logout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li></div>
         
        </div>



<div class="container " style="margin-top:40px;">

   <div class="col-md-9">  
<!-- questions -->
       <script>
    jQuery(function(){
     jQuery('#1').click();
    
});
</script>
       
       
       
       <div class="container col-md-8 col-lg-9 col-sm-10" style="width:80%">

      <div class="tab-content ">
    <div id="home" class="tab-pane in active">
     <ul  id="sortable1"  class="list-inline">
    <li class="  btn btn-default" style="width:31px;" id="1">1</li>
    <li class="  btn btn-default" style="width:31px;" id="2">2</li>
    <li class="btn btn-default" style="width:31px;" id="3">3</li>
    <li class="btn btn-default" style="width:31px;" id="4">4</li>
         <li class="btn btn-default" style="width:31px;" id="5">5</li>
          <li class="  btn btn-default" style="width:31px;" id="6">6</li>
    <li class="  btn btn-default" style="width:31px;" id="7">7</li>
    <li class="btn btn-default" style="width:31px;" id="8">8</li>
    <li class="btn btn-default" style="width:31px;" id="9">9</li>
         <li class="btn btn-default" style="width:31px;" id="10">10</li>
        </ul>
      <div id="txtHint"></div><br>

    </div>
    <div id="menu1" class="tab-pane ">
             <ul  id="sortable1"  class="list-inline">

       <li class="btn btn-default" style="width:31px;" id="11">11</li>
    <li class="btn btn-default" style="width:31px;" id="12">12</li>
    <li class="btn btn-default" style="width:31px;" id="13">13</li>
    <li class="btn btn-default" style="width:31px;" id="14">14</li>
    <li class="btn btn-default" style="width:31px;" id="15">15</li>
                  <li class="  btn btn-default" style="width:31px;" id="16">16</li>
    <li class="  btn btn-default" style="width:31px;" id="17">17</li>
    <li class="btn btn-default" style="width:31px;" id="18">18</li>
    <li class="btn btn-default" style="width:31px;" id="19">19</li>
         <li class="btn btn-default" style="width:31px;" id="20">20</li>
                 
    <div id="txtHint1"></div><br>
</ul>  </div>
           <div id="menu2" class="tab-pane ">
             <ul  id="sortable1"  class="list-inline">

     <li class="btn btn-default" style="width:31px;" id="21">21</li>
    <li class="btn btn-default" style="width:31px;" id="22">22</li>
    <li class="btn btn-default" style="width:31px;" id="23">23</li>
    <li class="btn btn-default" style="width:31px;" id="24">24</li>
    <li class="btn btn-default" style="width:31px;" id="25">25</li>
                  <li class="  btn btn-default" style="width:31px;" id="26">26</li>
    <li class="  btn btn-default" style="width:31px;" id="27">27</li>
    <li class="btn btn-default" style="width:31px;" id="28">28</li>
    <li class="btn btn-default" style="width:31px;" id="29">29</li>
         <li class="btn btn-default" style="width:31px;" id="30">30</li>
                 
    <div id="txtHint2"></div><br>
</ul>  </div>
           <div id="menu3" class="tab-pane ">
             <ul  id="sortable1"  class="list-inline">

    <li class="btn btn-default" style="width:31px;" id="16">1</li>
    <li class="btn btn-default" style="width:31px;" id="17">2</li>
    <li class="btn btn-default" style="width:31px;" id="18">3</li>
    <li class="btn btn-default" style="width:31px;" id="19">4</li>
    <li class="btn btn-default" style="width:31px;" id="20">5</li>
                 
    <div id="txtHint3"></div><br>
</ul>  </div>
    
   
  </div>
       </div>  
      
  </div>
    
    <div class="col-md-3 col-lg-2 col-sm-2"> 
        <div style="color:#729f98;background:#d0d0d0;color:#729f98;;height:30px;text-align:center;margin-left:0px;width:200px;color:#000000;font-size:18px;margin-top:0px;">
        Time left
        </div>
        <div class="container" style="background:#F0F0F0;height:100px;margin-right:10px;width:200px;box-shadow: 3px 3px 5px gray">
           <h1 style="margin-left:15px;margin-top:30px;"> 
		   <!--timer-->
<?php

$timestamp = time();
$diff = 1800; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;


?>
            <p id="strclock"></p>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>;

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
    var time =( 1800 -(min*60))-sec;
               setCookie("timeget", time, 30);

 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
    
    if(min==0&&sec==0)
    {
document.myForm.mySubmit.click();
       
    }
 setTimeout("countdown()",1000);
 }
 countdown();
    

</script>
               
       <!-- end  timer-->
  
            
            </h1>
           
     <form name="myForm" onclick="ss()"; onsubmit="return confirm('Do you really want to exit?');" method="post" action="demo.php">   
 <input class="btn btn-default" style="margin-left:30px;margin-top:150px;width:110px;font-weight:bold;color:#729f98;" type="submit"  name="mySubmit" value="Submit">
         
            </form>    </div>
    </div>
    </div>
         <nav class="navbar-default navbar-fixed-bottom" style="background:#f0f0f0"> 
            
            <div  class="col-md-7 col-lg-7">
                <h5 style=" white-space: pre;color:#909090; font-family: 'Lato', sans-serif;font-weight:bold"> Developed by: <a href="https://in.linkedin.com/pub/rohit-kori/ab/665/194" style="text-decoration:none;" target="_blank" >  Rohit Kori,</a><a href="https://www.facebook.com/sachin.sen.5099?fref=ts" style="text-decoration:none; "target="_blank" >   Sachin Sen,</a>  <a href="https://www.facebook.com/vinayprakashsingh98?fref=ts" style="text-decoration:none;"target="_blank" >   Vinay Prakash.</a></h5> </div>  
        
            </div><div class="col-md-5 col-lg-5"> <h5 style="white-space: pre; text-align:right;font-family: 'Lato', sans-serif;color:#909090;font-weight:bold">Guided by:     <a href="#" style="text-decoration:none;text-align:center" >Prof. Sandeep Raghuwanshi</a></h5></div>    </nav> 
    
    
    </body>
</html>