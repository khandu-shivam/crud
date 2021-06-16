<?php
include 'admsession.php';  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<style>
	.a{
		border:2px solid;
		background: red;
		text-align: center;
	}
	.c{
  background: url("https://albumizr.com/ia/64d51a3942a588013d1c215a35441370.jpg");
  background-repeat:no-repeat;
  background-size:cover;
}


</style>
<body class="c">

	<img src="https://mitsgwalior.in/img/newsite-logo1.png" style="margin-left:90px;"><img src="https://mitsgwalior.in/img/headimg2019m.png"><img src="https://mitsgwalior.in/img/newsite-logo1.png">
<br><br>


<div class="container">
	<!--  <h1 style="color:brown"> welcome!! <?php echo $_SESSION['email'] ?></h1> 
 -->
  

  <?php 
	 if (isset($_SESSION['success'])) {
	 	?>
	 	<h1 class="alert alert-info">
	 	
	 	<?php 
	 	echo $_SESSION['success'];
	 	unset($_SESSION['success']); 
	 	?> 
	   </h1>

	 <?php
	 }
	?>

	<h1 style="color:brown"> welcome!! <?php echo $_SESSION['name'] ?></h1> 

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 text-center">
			<h1 style="color:blue">Choose Your Program And Register for Admission</h1>
		</div>
		<div class="col-md-2"></div>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-center">
			<h1 class="a">Graduation</h1>
			<a href="admform.php"><button style="background-color:green;width:200px;">B.tech</button></a><br><br>
<a href="admform.php"><button style="background-color:green;width:200px;">B.Arch</button></a><br><br>
<a href="admform.php"><button style="background-color:green;width:200px;">Bca</button></a><br><br>
		</div>
		<div class="col-md-6 text-center">
			<h1 class="a">Post-Graduation</h1>
			<a href="admform.php"><button style="background-color:green;width:200px;">M.tech</button></a><br><br>
<a href="admform.php"><button style="background-color:green;width:200px;">Mca</button></a><br><br>
<a href="admform.php"><button style="background-color:green;width:200px;">MBA</button></a><br><br>
		</div>
	</div>
</div>

<a href="admlogout.php"><button style="background-color:grey;width:200px;">logout</button></a><br><br>






</body>
</html>