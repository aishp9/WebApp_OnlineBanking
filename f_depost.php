<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
	if($_SERVER['REQUEST_METHOD']=="POST")
	{

		$mysqli = new mysqli("localhost", "root","qwerty") or die($mysqli->error); 
		$mysqli->select_db("Basic") or die("Cannot connect to database"); 
		date_default_timezone_set("Asia/Kolkata");
		$amount=$mysqli->real_escape_string($_POST['amount']);
		$details=$mysqli->real_escape_string($_POST['details']);
		$date=date("Y-m-d h:i:sa");
		$mysqli->query("INSERT INTO Transaxs (details,amount,user,date_transaction) VALUES ('$details','$amount','$user','$date')");
		Print '<script>alert("Successful Deposit Made");window.location.assign("balance.php");</script>';
	
	}
	else
	{
		header("location:home.php");
	}


 ?>
