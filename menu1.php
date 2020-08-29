<?php
include("nav1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FOODSHALA</title>
<style type="text/css">
	.uu11{
		list-style-type: none;
		overflow:hidden;
		padding:0;
		margin-top:2px;
		width:100%;
		margin-left:450px;
	}
	.lll a {
		text-decoration: none;
		color:white;
		display:block;
		height:50px;
		width:500px;
		padding: 10px;
		border:1px solid black;
		background-color: lime;
		border-radius: 20px 0 20px 0;
		font-weight: bold;
	}
	.lll{
		text-align: center;
		padding:10px;
		margin-bottom:5px;
	}
	li:hover{
		opacity:0.8;
	}
	#items{
		height:250px;
		width:310px;
		padding:5px;
		border-radius:10px;
	}
	#items img{
		height:150px;
		width:300px;
		border-radius: 10px;
		display:block;
		text-align: center;
	}
	#items h5{
		text-align: center;
		margin-top:0;
		margin-bottom: 0;
	} 
	#items:hover{
		border:2px solid black;
	}
	.it{
		list-style-type: none;
		display:inline-block;
		padding:22px;
	}
	.it #items button{
		background-color: black;
		border:1px solid white;
		color:white;
		border-radius: 7px;
		padding:3px;
		width:120px;
		cursor:pointer;
	}
</style>
<script>
	function order(){
		if(confirm("Do you want to place this order ?")){
		alert("Your order placed succesfully. Do the payment during delivery. Enjoy your food......");}
	}
</script>
</head>
<body>
<li class="it">
	<div id="items">
		<img src="./images/m1.jpg" alt="pic"><hr>
		<h5>SAMOSA - 10/- each</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m2.jpg" alt="pic"><hr>
		<h5>SMOKY CHICKEN PIECES - 150/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m3.jpg" alt="pic"><hr>
		<h5>PASTRY - 40/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m4.jpg" alt="pic"><hr>
		<h5>COMBO(NOODLE+MANCHURIAN) - 90/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m5.jpg" alt="pic"><hr>
		<h5>CHEESE PIZZA - 120/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m6.jpg" alt="pic"><hr>
		<h5>SPECIAL BIRYANI - 100/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m7.jpg" alt="pic"><hr>
		<h5>BURGER - 60/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m8.jpg" alt="pic"><hr>
		<h5>SOUTH INDIAN PURI - 40/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m9.jpg" alt="pic"><hr>
		<h5>SPECIAL CHICKEN FRY - 300/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m10.jpg" alt="pic"><hr>
		<h5>VEG LOADED PIZZA - 150/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m11.jpg" alt="pic"><hr>
		<h5>ALOO SNACK - 50/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m12.jpg" alt="pic"><hr>
		<h5>NORTH INDIAN THALI - 80/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m13.jpg" alt="pic"><hr>
		<h5>MACRONI - 70/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m14.jpg" alt="pic"><hr>
		<h5>EGG BIRYANI - 60/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m15.jpg" alt="pic"><hr>
		<h5>FISH FRY - 200/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m16.jpg" alt="pic"><hr>
		<h5>VEG NOODLE - 60/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m17.jpg" alt="pic"><hr>
		<h5>VEG FRIED RICE - 70/-</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
</body>
</html>