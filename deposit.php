<html>
	<head>
	<title>E-Banking</title>
	<style>
 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px blue;
	background-color: yellow;
	text-align: center;
	position:relative;
	top:5px;
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
input{
	align-content: right;
	margin:5px;
}
a{
	color:gray;
	text-decoration: underline;
	align-content: right;
	font-family: url("sample.ttf")
}

.button{
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: blue;
	text-align: center;
	color:gray;
}

.button:hover {
  background: gray;
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
h3
{
	color:gray;
	font-family: url("sample.ttf")
}
p{
	font-family: url("sample.ttf");
	font-weight: bold;
	font-size:  20px;
	color: gray;
	vertical-align: text-bottom;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 7%;
  text-align: center;
  background-color: blue;
  color: gray;

}
    </style>
    </style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		?>
	<body>
			<nav><?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO XYZ BANK</B> </marquee></p>";
		?></nav>

	<div class="container">
		<h3> Welcome to XYZ<?php Print "$user" ?></h3>
		<a href="home.php">Go Back.</a><br/>
		<br/><br/>
		<form action="add.php" method="POST">
			Enter Deposit Amount: <input type="number" min="0" max="500000" name="amount" required="required">
			<br/>
			Description: <input type="text" name="details" required="required" /><br/>
			<input type="submit" class="button" value="Deposit Money"/>
		</form>

	</div>
	<div class="footer">
   <p id="date"></p>&nbsp;&nbsp;
   <p id="time"></p> 
	</div>

	</body>
	
</html>
