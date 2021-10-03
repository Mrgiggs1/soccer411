<?php
include "dbconnection.php";
		
		$gameID = $_GET['id'];
		
		$del = "DELETE FROM game WHERE gameID='".$gameID."'";
		$query = mysqli_query($con, $del);
		if($query)
		{
			echo'<script language="javascript">document.location="setGame.php";</script>';		
		}else
		{
			echo '<script type="text/javascript"> alert("Failed to delete Ficture") </script>';
			echo'<script language="javascript">document.location="setGame.php";</script>';	
		}
?>