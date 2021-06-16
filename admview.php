<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="text-center text-info">Data Display</h1><br>
		<table class="table table-striped table-bordered">
		  <tr>
			<th>Id</th>
			<th>name</th>
			<th>email</th>
			<th>phone</th>
			<th>DOB</th>
			<th>Address</th>
			<th>12th Percentage</th>
		  </tr>

		  <?php
		  include 'dbcon.php';
		  $id=$_GET['id'];
		  $data="select * from admform where id=$id";
		  $res=mysqli_query($con,$data);
		   $entry=mysqli_fetch_array($res);
		   ?>

		    <tr>
		  	<td> <?php echo $entry['id'] ?> </td>
		  	<td><?php echo $entry['name'] ?></td>
		  	<td><?php echo $entry['email'] ?></td>
		  	<td> <?php echo $entry['phone'] ?></td>
		  	<td> <?php echo $entry['DOB'] ?></td>
		  	<td> <?php echo $entry['address'] ?></td>
		  	<td> <?php echo $entry['12th_per'] ?></td>
		  </tr>


</body>
</html>