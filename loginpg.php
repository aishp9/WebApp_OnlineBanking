<html>
	<head>
	<title>E-Banking</title>
<style>
.container{
	width: 450px;
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
p{
	font-family: url("sample.ttf");
	font-weight: bold;
	font-size:  20px;
	color: gray;
	vertical-align: text-bottom;
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
  height: 10%;
  background-color: blue;
  text-align: center;
  color: gray;
}
    </style>
	</head>
	<body>
		<nav><?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO XYZ BANK</B> </marquee></p>";
		?></nav>
	<div class="container">
		<h2>Login</h2>
		<a href="index.php" >Go Back.</a><br/>
		<form action="checklogin.php" method="POST">
			Username : <input type="text" name="username" required="required"/><br/>
			Password : <input type="password" name="password" required="required"/><br/>
			<input type="submit" value="Login" class="button"/>
			</form>	
	</div>

	</body>
	
</html>
