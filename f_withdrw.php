<?php 
	session_start();
	if($_SESSION['user']){
		$user=$_SESSION['user'];
	}
	else{
		header("location:index.php");
	}
		
	$mysqli = new mysqli("localhost", "root","qwerty") or die($mysqli->error); 
	$mysqli->select_db("Basic") or die("Cannot connect to database"); 

	$balance=0.00;
	$query=$mysqli->query("SELECT * from Transaxs WHERE user='$user'");
	while($row=$query->fetch_array())
		{
			$balance= $balance + $row['amount'];
		}

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		date_default_timezone_set("Asia/Kolkata");
		$amount=$mysqli->real_escape_string($_POST['amount']);

		
		if($amount>$balance)
		{
			
			Print '<script>alert("Insufficient amount in account.");;
			window.location.assign("balance.php")</script>';
			exit("Account has insufficient amount");
			
		}
		$amount=(-$amount);
		$details=$mysqli->real_escape_string($_POST['details']);
		$date = date("Y-m-d h:i:sa");
		$mysqli->query("INSERT INTO Transaxs (amount,date_transaction,details,user) VALUES ('$amount','$date','$details','$user')");
		Print '<script>alert("Successful Withdrawal");window.location.assign("balance.php");</script>';
		
	}
	else
	{
		header("location:home.php");
	}


 ?>
