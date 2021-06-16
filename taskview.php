<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

<?php

include 'dbcon.php';

$id=$_GET['id'];
$data="select * from task where id=$id";
$result=mysqli_query($con,$data);
$entry=mysqli_fetch_array($result);
// print_r($entry);


?>

<table class="table table-striped table-bordered">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>City</th>
		<th>Pincode</th>
		<th>College</th>
		<th>Department</th>
		<th>Branch</th>
		<th>Semester</th>
	</tr>
	<tr>
		<td> <?php echo $entry['id'] ?> </td>
		<td><?php echo $entry['name'] ?></td>
		<td><?php echo $entry['email'] ?></td>
		<td> <?php echo $entry['phone'] ?></td>
		<td> <?php echo $entry['address'] ?></td>
		<td> <?php echo $entry['city'] ?></td>
		<td> <?php echo $entry['pincode'] ?></td>
		<td> <?php echo $entry['college'] ?></td>
		<td> <?php echo $entry['department'] ?></td>
		<td> <?php echo $entry['branch'] ?></td>
		<td> <?php echo $entry['semester'] ?></td>
	</tr>


</body>
</html>