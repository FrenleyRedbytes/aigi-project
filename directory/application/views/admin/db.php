<?php

	global $con;
	//$con = mysqli_connect("localhost","dealfiz","emaster@123#","sayso");
	$con = mysqli_connect("localhost","root","","sayso");

	

	/*if($_SERVER['PHP_SELF']=="/index.php"){
		if(isset($_SESSION['user_id'])){
	        header('location:dashboard.php');
	    }
	}else{
		if(!(isset($_SESSION['user_id']))){
	        header('location:index.php');
	    }
	}*/

?>