<html>
	<head>
	<title>E-Banking</title>
<style>
 .container{
	width: 450px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px blue;
	background-color:yellow;
	text-align: center;
	position:relative;
	top:10px;
	vertical-align: middle;
	border:10px solid blue;
}

form{
	align-content: center;
	padding:10px;
	margin-top: 15px;
	color:gray;
	font-family: url("sample.ttf")
}
input
{
	margin :5px;
}
a{
	color:gray;
	text-decoration: underline;
	align-content: right;
	font-family: url("sample.ttf")
}

body{
	background-image: url('back.jpg');
	margin:0px;
}
nav
{
	background-color: blue;
	font-size: 1.5rem;

}
h2
{
	color:gray;
	font-family: url("sample.ttf")
}
.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: blue;
	text-align: center;
	position:relative;
	right:-100px;
	color:gray;
}

.button:hover {
  background: gray;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  color: gray;
  text-align: center;
  height: 10%;
  font-weight: bold;
}
    </style>
	</head>
	<body>
	<nav><?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO XYZ BANK</B> </marquee></p>";
		?></nav>
	<div class="container">
		<h2 >Registration Page</h2>
		<a href="index.php" >Go Back.</a><br/>
		<form action="register.php" method="POST">
			Enter Username : <input type="text" name="username" required="required"/><br/>
			Enter Password : <input type="password" name="password" required="required"/><br/>
			<input type="submit" value="Register" class="button"/>
			</form>	
	</div>

	</body>
	
</html>
<?php
static $mysqli;
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

		$mysqli = new mysqli("localhost","root","qwerty") or die($mysqli->error);
		$mysqli->select_db("Basic") or die("Cannot connect to database");
		$username = $mysqli->real_escape_string($_POST['username']);
		$password = $mysqli->real_escape_string($_POST['password']);
		$bool=true;
		$query=$mysqli->query("SELECT * FROM userstable");	
		while($row=$query->fetch_array())
		{
			$table_user=$row['username'];
			if($username==$table_user)
			{
				$bool=false;
				Print '<script>alert("Username already taken!");</script>';
				Print '<script>window.location.assign("register.php");</script>';
			}
		}
		if($bool)
		{
			$mysqli->query("INSERT INTO userstable (username,password) VALUES ('$username','$password')");
			Print '<script>alert("Successfully Registered! ");</script>';
			Print '<script>window.location.assign("index.php");</script>';
		}
	}
?>

