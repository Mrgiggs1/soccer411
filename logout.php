<?php
session_start();
$_SESSION['email']="";



if(strlen($_SESSION['email']) <= 0)
{
	//session_unset();
	echo'<script language="javascript">
document.location="login.php";
</script>';
}
else
{
	echo '<script type="text/javascript"> alert("Failed to logged out..") </script>';
}
?>



