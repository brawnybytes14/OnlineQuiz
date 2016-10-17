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

function vinay(){
    document.getElementById('1').click();
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
        document.getElementById("txtHint").innerHTML = "";
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
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
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
<body style="margin-top:0" onload="vinay()">
 
<h2 style="text-align:center">others</h2>


<div class="container">

   <div class="col-md-10">  
<!-- questions -->
<ul  id="sortable1"  class="list-inline">
    <li class="btn btn-default" style="width:31px;" id="1">1</li>
    <li class="btn btn-default" style="width:31px;" id="2">2</li>
    <li class="btn btn-default" style="width:31px;" id="3">3</li>
    <li class="btn btn-default" style="width:31px;" id="4">4</li>
    <li class="btn btn-default" style="width:31px;" id="5">5</li>
   
    
</ul>  
      



<div id="txtHint"><b>You can select questions by clicking them!...</b></div><br>
      
      
  </div>
    
    <div class="col-md-2">
        <div style="background:#d0d0d0;height:30px;text-align:center;margin-left:0px;width:200px;color:#000000;font-size:18px;margin-top:0px;">
        Time left
        </div>
        <div class="container" style="background:#F0F0F0;height:100px;margin-right:10px;width:200px;box-shadow: 3px 3px 5px gray">
           <h1 style="margin-left:15px;margin-top:30px;"> 
		   <!--timer-->
<?php

$timestamp = time();
$diff = 600; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

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
 <input class="btn btn-default" style="margin-left:30px;margin-top:150px;width:110px;font-weight:bold" type="submit"  name="mySubmit" value="Submit">
         
            </form>    </div>
    </div>
    </div>
        
    
    
    </body>
</html>