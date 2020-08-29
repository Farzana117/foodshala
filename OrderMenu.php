<?php
include("nav1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ORDER MENU</title>
	<style>
		table{
			border:3px solid black;
			border-collapse: collapse;
			margin-right:80px;
		}
		tr{
			border:2px solid black;
			border-collapse: collapse;
		}
		th,td{
			width:300px;
			text-align: center;
			padding:30px;
		}
		th{
			font-size: 20px;
			
		}
		tr{
			font-size: 19px;
		
		}
		#dp{
			background-image: url('./images/img6.jpg');
			background-size: cover;
		}
		tr td button{
			border:1px solid black;
			background-color: black;
			color:white;
			border-radius: 8px;
			height:25px;
			width:120px;
			cursor: pointer;
		}
	</style>
		<script>
			function POrder(){
				if(confirm("Do you want to place this order ?")){
				alert("Your order placed succesfully. Do the payment during delivery. Enjoy your food......");
				window.location="home.php";
			}
			}
		</script>
</head>
<body>
	<div id="dp">
	<center><h2><i>AVAILABLE ITEMS</i></h2></center>
	<table align="center">
		<tr>
			<th>Item Name</th>
			<th>Cost of item</th>
			<th>Place Order</th>
		</tr>
		<?php
			$servername="localhost";
			$username="id14719824_root";
			$password="Farzanaa@123";
			$dbname="id14719824_foodshala";
			//create connection
			$conn=mysqli_connect($servername,$username,$password,$dbname);
			$q="SELECT * from addmenu ";
			$res=$conn->query($q);
			while($row=$res->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['item']?></td>
					<td><?php echo $row['price']?></td>
					<td><button onclick="POrder()">Place Order</button></td>
				</tr>

				<?php
			}
		?>
	</table>
</div>
</body>
</html>