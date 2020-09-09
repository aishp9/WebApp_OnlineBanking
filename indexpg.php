<html>
	<head>
	<title>E-Banking</title>
	<style>

 .container{
 	 position: fixed;
  top: 150px;
  left:350px;
  width: 100%;
  color: white;
  text-align: center;
  padding-right: 
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: crimson;
  color: white;
  text-align: center;
}

p{
	font-family: url("sample.ttf");
	font-weight: bold;
	font-size:  20px;
	color: gray;
	vertical-align: text-bottom;
}
body{
	background-color: black;
	background-image: url("money.jpg");
	background-position: center;
	background-size: cover;
	margin:0px;

	 
}
nav
{
	background-color:crimson;

}

button{
	width :150px;
	margin :5px;
	padding:2px;
	font-weight: bold;
	background-color: red;
	text-align: center;
	color: white;
	font-family: url("timenewroman.ttf");
	text-decoration: none;
}
.captions
{
	width: 360px;
	margin-right: 660px;
	text-align: center;
	position:relative;
	top:90px;
	vertical-align: middle;
	border:5px solid gray;
float: right;
padding-right: 10px;
padding-top: 10px;
font-family: url("timesnewroman.ttf");
color:gray;
background-color:crimson;
}
button:hover {
  background: #CF4647;
}


    </style>
	</head>
	<body>
	<nav><?php
			Print "<p><MARQUEE BEHAVIOR=ALTERNATE ><B> WELCOME TO XYZ BANK</B> </marquee></p>";
		?></nav>
	<div class="captions"><b>SECURITY TIPS</b><br>
<ul><li>Always Update your PC with latest anti-virus and spy ware software regularly</li>
<li>Always ensure that the page displayed is an https://</li>
<li>Never Respond to any emails/phone calls seeking your password.</li>
<li>Never reveal your password/OTP/card details to anyone.</li></ul></div>
   <div class="container">
   <button type="button" onclick="location.href='login.php'">CUSTOMER LOGIN</button><br/>
   <button type="button" onclick="location.href='adminlogin.php'">ADMIN LOGIN</button><br/>
	<button type="button" onclick="location.href='register.php'">REGISTER</button>
	</body>
</html>