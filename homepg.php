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
	top:10px;
	vertical-align: middle;
	border:10px solid blue;
}


h2{
	font-family: url("sample.ttf");
	color: gray;
}

a{
	color:gray;
	text-decoration:underline;
	align-content: right;
	font-family: url("sample.ttf");
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

button{
	width:380px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: blue;
	text-align: center;
	color:gray;
}

button:hover {
  background: gray;
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
  font-weight: bold;
}
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
		<h2> Welcome to XYZ! <?php Print "$user" ?></h2>
		<a href="logout.php" >Logout.</a><br/>
		<br/><br/>
		<button type = "button" onclick="location.href='deposit.php'" >Deposit Money</button>
		
		
		<button type = "button" onclick="location.href='withdraw.php'" >Withdraw Money</button>
	
	
		<button type = "button" onclick="location.href='balance.php'" >Check Balance</button>

	</div>

	</body>
	
</html>
