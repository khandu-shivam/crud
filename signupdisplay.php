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
			<th>Email</th>
			<th>Operations</th>
		  </tr>

		  <?php
		  include 'dbcon.php';
		  $data="select * from signup order by id desc";
		  $res=mysqli_query($con,$data);

		  while($entry=mysqli_fetch_array($res))
		  {
		  ?>

		    <tr>
		  	<td> <?php echo $entry['id'] ?> </td>
		  	<td><?php echo $entry['full_name'] ?></td>
		  	<td> <?php echo $entry['email'] ?></td>
		  	<td>
		  		<a href="signupview.php?id=<?php echo $entry['id'] ?>">View</a>
		  		<a href="signupedit.php?id=<?php echo $entry['id'] ?>">Edit</a>
		  		<a href="signupdelete.php?id=<?php echo $entry['id'] ?>">Delete</a>
		  </tr>
<?php
}
?>

</body>
</html>