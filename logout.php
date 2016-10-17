

<?php
// Start the session
session_start();

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

session_destroy();
	header('Location:index.php');
?>