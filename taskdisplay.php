<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h1 class="text-center text-info"> Task Data Display</h1><br>
		<table class="table table-striped table-bordered">
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Phone</td>
				<td>College</td>
				<td>Operationss</td>
			</tr>

<?php

include 'dbcon.php';
$data="select * from task order by id desc";
$result=mysqli_query($con,$data);

//$entry=mysqli_fetch_array($result);

while($entry=mysqli_fetch_array($result))
{
		 // echo "<pre>";
		 // print_r($entry);

?>

<tr>
	<td> <?php echo $entry['id'] ?> </td>
	<td> <?php echo $entry['name'] ?> </td>
	<td> <?php echo $entry['phone'] ?> </td>
	<td> <?php echo $entry['college'] ?> </td>
	<th>
		<a href="taskview.php?id=<?php echo $entry['id'] ?>">View</a>
		<a href="taskedit.php?id=<?php echo $entry['id'] ?>">edit</a>
		<a href="taskdelete.php?id=<?php echo $entry['id'] ?>">delete</a>
	</th>
</tr>

<?php
}
?>

</table>
</div>
</body>
</html>

