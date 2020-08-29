<?php
include("nav1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FEEDBACK</title>
	<style type="text/css">
		
		input[type=text],[type=email]{
			width:100%;
			height:30px;
		}
		label{
			font-weight: bold;
			font-size:15px;
			
		}
		textarea{
			width:100%;
			height:200px;
		}
	</style>
</head>
<?php
	if(isset($_POST['feed'])){
		?>
		<script>
			alert("Thanks for your valuable time. Your feedback means alot to us.");
			window.location="home.php";
		</script>
		<?php
	}
?>
<body>
	<h1>Please Provide Your Feedback here.........</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label>Name</label><input type="text" name="name"><br><br>
		<label>Email</label><input type="email" name="email"><br><br>
		<label>Rating to the food</label>&nbsp;&nbsp;&nbsp;
		<input type="radio" name="rate">1
		<input type="radio" name="rate">2
		<input type="radio" name="rate">3
		<input type="radio" name="rate">4
		<input type="radio" name="rate">5
		<br><br>
		<label>Description</label>
		<textarea placeholder="Write something......"required></textarea><br><br>
		<input type="submit" name="feed">
	</form>
</body>
<script type="text/javascript">
  function report()
  {
    if(document.getElementById("fname").value!="" && document.getElementById("subject").value!="")
    {
    alert('Your issue will be resolved soon.........Thank you!!!!');
    }
  }
</script>
</html>