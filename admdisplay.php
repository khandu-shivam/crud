<?php
include 'admsession.php';
?>
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
			<th>S.no</th>
			<th>name</th>
			<th>Email</th>
			<th>Operations</th>
		  </tr>

		  <?php
		  $i=1;
		  include 'dbcon.php';
		  $id=$_SESSION['sid'];
		  $data="select * from admform where student_id=$id";
		  $res=mysqli_query($con,$data);
		  // $entry=mysqli_fetch_array($res);
		  // print_r($entry);

		  $entry=mysqli_fetch_array($res);
		  {
		  ?>

		    <tr>
		  	<td> <?php echo $i++ ?> </td>
		  	<td><?php echo $entry['name'] ?></td>
		  	<td> <?php echo $entry['email'] ?></td>
		  	<td>
		  		<a href="admview.php?id=<?php echo $entry['id']?>">View</a>
		  		<a href="admedit.php?id=<?php echo $entry['id']?>">Edit</a>
		  		<a href="admdelete.php?id=<?php echo $entry['id']?>">Delete</a>
		  </tr>
<?php
}
?>

</body>
</html>