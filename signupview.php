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
			<th>DOB</th>
			<th>phone</th>
			<th>college</th>
			<th>gender</th>
			<th>qualification</th>
		  </tr>

		  <?php
		  include 'dbcon.php';
		  $id=$_GET['id'];
		  $data="select * from signup where id=$id";
		  $res=mysqli_query($con,$data);
		   $entry=mysqli_fetch_array($res);
		   ?>

		    <tr>
		  	<td> <?php echo $entry['id'] ?> </td>
		  	<td><?php echo $entry['full_name'] ?></td>
		  	<td><?php echo $entry['email'] ?></td>
		  	<td> <?php echo $entry['DOB'] ?></td>
		  	<td> <?php echo $entry['phone_number'] ?></td>
		  	<td> <?php echo $entry['college'] ?></td>
		  	<td> <?php echo $entry['gender'] ?></td>
		  	<td> <?php echo $entry['qualification'] ?></td>
		  </tr>


</body>
</html>