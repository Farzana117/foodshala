
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
<style type="text/css">
		.error
		 {color: red;}
		 input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		 }
		 label{
		 	width:150px;
		 	display: inline-block;
		 }
     input[type="text"],[type="password"],[type="email"]{
      width:250px;
      height:30px;
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

	<center><h1><i>ADMIN REGISTRATION FORM</i></h1>
	<h2>REGISTER HERE !!!</h2></center>
<hr>
<form id="ff" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
//database connection to add data into db
if(!empty($_POST["name"]) && !empty($_POST["uname"]) && !empty($_POST["pswd"]) && !empty($_POST["mobile"]) && !empty($_POST["cpswd"]) && !empty($_POST["email"]) && $_POST["pswd"] == $_POST["cpswd"]) 
//password should contain atleast one capital one small one digit and any characters of length 8(special characters are optional)
 //preg_match("/^[A-Z]{1}[a-z]{1,6}[0-9]{1,2}[\w]{1,2}$/",$_POST["pswd"]))
{
if(isset($_POST['submit']))
{
$servername="localhost";
$username="id14719824_root";
$password="Farzanaa@123";
$dbname="id14719824_foodshala";
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
$email=$_POST['email'];
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
  die("Connection Failed : ".mysqli_error());
}
$sql="INSERT INTO admin(name,password,email) VALUES('$uname','$pswd','$email')";
if(!mysqli_query($conn,$sql))
{
  echo "error in adding data : ".mysqli_error($conn);
}
else{
  ?>
  <script>
    alert('Registered successfully......Login Now!!!!!');
    window.location="adminlogin.php";
  </script>
  <?php
}
mysqli_close($conn);
}
}
?>
	<label>Full Name: </label>  <input type="text" name="name" required><br><br>
  	<label>UserName: </label>  <input type="text" name="uname" required><br><br>
  	<label>Password: </label>  <input type="password" name="pswd" required><br><br>
  	<label>Confirm Password: </label>  <input type="password" name="cpswd"><br><br>
	<label>Mobile:</label>   <input type="text" name="mobile" required><br><br>
	<label> Email: </label>  <input type="email" name="email" required><br><br>
	<label><input type="reset" name="reset"></label>
	<label><input type="submit" name="submit"></label>
	<br><br>
	<p><span style="color:red; padding:5px; margin-right:10px;">Already have account!!! <a href="adminlogin.php">Login</a></span></p>
</form>

</body>
</html>