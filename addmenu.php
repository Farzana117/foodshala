<!DOCTYPE html>
<html>
<head>
	<title>ADD MENU PAGE</title>
	<style type="text/css">
			input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		 }
		 form #la{
		 	width:100px;
		 	display: inline-block;
		 }
		 #adbtn{
		 	border:1px solid black;
		 	background-color: green;
		 	color:white;
		 	border-radius: 7px;
		 }
		 #hhom{
		 	border:1px solid black;
		 	background-color: black;
		 	color:white;
		 	border-radius: 8px;
		 	padding:10px;
		 	cursor: pointer;
		 	width:90px;
		 }
	</style>
</head>
<body>
	<button id="hhom" onclick="window.location='index.php';">Home</button>
	<center>
	<h1>ADDING ITEMS TO THE MENU PAGE</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<label id="la">Item Name </label><input type="text" name="item"><br><br>
		<label id="la">Price</label><input type="text" name="price"><br><br>
		<input type="submit" name="adbtn" id="adbtn">
	</form>
</center>
	<?php
if(!empty($_POST["item"]) && !empty($_POST["price"])){
if(isset($_POST['adbtn']))
{
$servername="localhost";
$username="id14719824_root";
$password="Farzanaa@123";
$dbname="id14719824_foodshala";
$name=$_POST['item'];
$pp=$_POST['price'];
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
  die("Connection Failed : ".mysqli_error());
}
$sql="INSERT INTO addmenu(item,price) VALUES('$name','$pp')";
if(!mysqli_query($conn,$sql))
{
  echo "error in adding data : ".mysqli_error($conn);
}
else{
  ?>
  <script>
    alert('Item Added successfully!!!!!');
    window.location="ordermenu.php";
  </script>
  <?php
}
mysqli_close($conn);
}
}
?>
</body>
</html>