<?php
include("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	#dd1{
		height:500px;
		width:100%;
		background-image: url('./images/img1.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		margin-top:0px;
	}
	#foot{
		background-color: red;
		color:white;
		font-size:15px;
		height:40px;
		text-align: center;
		padding:10px;
	}
	#dd1 img{
		height:200px;
		width:600px;
	}
	#bx{
		border:2px solid white;
		height:200px;
		width:400px;
		border-radius: 10px;
		margin:auto;
		background-color: black;
		opacity:0.6;
	}
	#dd1 h1{
		color:white;
		font-weight: bold;
		text-align: center;
		font-size: 50px;
		margin-top:0px;
	}
	#bx button{
		background-color: lime;
		border:1px solid white;
		border-radius: 10px;
		width:150px;
		overflow:hidden;
		margin-top:30px;
		margin-left:80px;
		cursor:pointer;
		opacity: 1;
	}
	#bx #txt{
		font-weight: bold;
		font-size:18px;
		margin-top:50px;
		margin-left:50px;
	}
</style>
</head>
<body>
	<div id="dd1">
		<h1><i>Welcome to our Store</i></h1>
		<div id="bx">
			<div id="txt" style="color:white">Feeling Hungry!!!!! <br>View the menu and order now...</div>
			<div><button onclick="window.location.href='menu.php'">Order Now</button></div>
		</div>
	</div>
	<br>
	<footer id="foot"><marquee>ENJOY OUR FOOD</marquee> </footer>

</body>
</html>