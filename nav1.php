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
<script type="text/javascript">
	function logout(){
		if(confirm("Do you want to LOGOUT from website")){
			alert("Logged Out Successfully!! Thanks for visiting our website....");
			window.location="index.php";
		}
	}
</script>
</head>
<body>
	<div id="d1">FOODSHALA
		<span> Food</span>
	</div>
<nav>
	<ul class="uu1">
		<li class="ll"><a href="home.php">HOME</a></li>
		<li class="ll"><a href="OrderMenu.php">MENU</a></li>
		<li class="ll"><a href="contact.php">CONTACT US</a></li>
		<li class="ll"><a href="feedback.php">FEEDBACK</a></li>
		<li class="ll" onclick="logout()"><a href="#">LOGOUT</a></li>	
	</ul>	
</nav>
</body>
</html>