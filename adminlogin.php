<!DOCTYPE html>
<html>
<head>
	<title>ADMIN LOGIN FORM</title>
	<style type="text/css">		
		input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		 }
		 label{
		 	width:100px;
		 	display: inline-block;
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

	<center><h1>ADMIN LOGIN PAGE</h1></center>
<p>LOGIN TO YOUR ACCOUNT !!!</p>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
if(isset($_POST['submit']))
{
$servername="localhost";
$username="id14719824_root";
$password="Farzanaa@123";
$dbname="id14719824_foodshala";
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
  die("Connection Failed : ".mysqli_error());
}
$sql="SELECT name,password from admin where name='$uname' AND password='$pswd'";
$run=mysqli_query($conn,$sql);
$row=mysqli_num_rows($run);
if($row<1)
{
	?>
	<script>
		alert('Not found record!!!! This is Admin Page.....Register Now');
		window.location="adminregister.php";
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Logged In Successfully!!!!!');
		window.location="addmenu.php";
	</script>
	<?php
}

mysqli_close($conn);

}
/*if(mysqli_query($conn,$sql) ){
	header('location:homee.php');
}
else{
	echo "error found".mysqli_error($conn);
}
mysqli_close($conn);
}
*/
?>
<label>UserName</label><input type="text" name="uname" required><br><br>
<label>Password</label><input type="password" name="pswd" required><br><br>
<label><input type="reset" name="reset"></label>
<label><input type="submit" name="submit"></label>
<br>
<p style="color:red;">Don't have account!!!!<a href="adminregister.php"><b> Register Here</b></a></p>
</form>
</body>
</html>