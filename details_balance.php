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
a{
	color:gray;
	text-decoration: underline;
	align-content: right;
	font-family: url("sample.ttf");
}

h3{
	color:gray;
	font-family: url("sample.ttf");
}


h2
{
	color:gray;
	font-family: url("sample.ttf");
}

button{
	width :150px;
	margin :5px;
	padding:2px;
	font-weight: bold;
	background-color: blue;
	text-align: center;
	color: gray;
}

button:hover {
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
#time,#date
{
		display: inline-block;
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
		<h2 >Your balance</h2>
		<h3> Hello <?php Print "$user" ?></h3>
		<a href="home.php" >Go Back.</a><br/><br/><br/>
		<?php 
			$mysqli = new mysqli("localhost","root","qwerty") or die($mysqli->error);
			$mysqli->select_db("Basic") or die("Cannot connect to database");
			$balance=0.00;
			echo "<table border=1 align=center>
			<tr>
			<th>ID</th>
			<th>Details</th>
			<th>Amount</th>
			<th>Transaction Date</th>
			</tr>";
			$query=$mysqli->query("SELECT * from Transaxs WHERE user='$user'");
			if ($query->num_rows > 0) {
			while($row=$query->fetch_array())
			{
				$balance= $balance + $row['amount'];
				echo "<tr>";
			   	echo "<td>" . $row['id']."</td>";
			  	echo "<td> " . $row['details']."</td> ";
				echo "<td>" . $row['amount']."</td>";
				echo "<td>" . $row['transaction_date']."</td>";
			   	echo "</tr>";
			}}
Print "Balance: INR  " . $balance;
echo "<br><br>";
$mysqli->close();
?>
	</div>

	</body>
	
</html>
