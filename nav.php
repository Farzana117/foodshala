<!DOCTYPE html>
<html>
<head>
	<title>FOODSHALA</title>
<style type="text/css">
	*{
		box-sizing: border-box;
	}
	#d1{
		background-color: red;
		color:white;
		font-weight: bold;
		font-family: serif;
		padding:30px;
		font-size: 20px;
	}
	.uu1{
		list-style-type: none;
		background-color: red;
		overflow:hidden;
		padding:0;
		margin-top:2px;
		width:100%;
	}
	li a {
		text-decoration: none;
		color:white;
		display:block;
		height:35px;
		width:300px;
		padding: 6px;
	}
	.ll{
		float:left;
		text-align: center;
	}
	li:hover{
		opacity:0.8;
	}
	#d1 #un{
		folat:right;
	}
	#d1 span{
		height:30px;
		width:50px;
		border-radius: 20px 0 20px 0;
		border:2px solid yellow;
		float:right;
		padding:3px;
		color:lime;
	}
</style>
</head>
<body>
	<div id="d1">FOODSHALA
		<span> Food</span>
	</div>
<nav>
	<ul class="uu1">
		<li class="ll"><a href="index.php">HOME</a></li>
		<li class="ll"><a href="menu.php">MENU</a></li>
		<li class="ll"><a href="login.php">LOG IN</a></li>
		<li class="ll"><a href="register.php">SIGN UP</a></li>	
	</ul>	
</nav>
</body>
</html>