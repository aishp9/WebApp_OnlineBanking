<?php 
	session_start();
	static $mysqli;

	$mysqli = new mysqli("localhost","root","qwerty") or die($mysqli->error);
	$mysqli->select_db("Basic") or die("Cannot connect to database");
	$username=$mysqli->real_escape_string($_POST['username']);
	$password=$mysqli->real_escape_string($_POST['password']);
	$query=$mysqli->query("SELECT * FROM admintable WHERE username = '$username'");
	$exists=$query->num_rows;
	$table_user="";
	$table_password="";
	if($exists>0)
	{
		while($row=$query->fetch_array())
		{
			$table_user=$row['username'];
			$table_password=$row['password'];
		}
		if($username== $table_user)
		{
			if($password==$table_password)
			{
				$_SESSION['user']= $username;
				header("location:http://localhost/phpmyadmin/index.php");
			}
			else
			{
				Print '<script>alert("Incorrect Password");</script>';
				Print '<script>window.location.assign("login.php");</script>';
			}
		}
	}
	else
	{
		Print '<script>alert("Incorrect Username");</script>';
		Print '<script>window.location.assign("login.php");</script>';
	}

 ?>