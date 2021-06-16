<?php
include 'dbcon.php';
$id=$_GET['id'];
$data="select * from task where id='$id'";
$result=mysqli_query($con,$data);
$entry=mysqli_fetch_array($result)

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>


<div class="container">
	<div class="row">

		<div class="col-md-3"></div>

		<div class="col-md-6 bg-danger">
			<h1 class="text-center text-dark">SURVEY FORM</h1>

	<form method="post" action="taskupdate.php">
		 <input type="hidden" name="id" value="<?php  echo $entry['id']?>">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="n" value="<?php  echo $entry['name']?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="e" value="<?php  echo $entry['email']?>" class="form-control">
				</div>
				<div class="form-group">
				 	<label>Phone:</label>
					<input type="text" name="p" value="<?php  echo $entry['phone']?>" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="a" class="form-control"><?php  echo $entry['address']?></textarea>
				</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>City:</label>
					<input type="text" name="c" value="<?php  echo $entry['city']?>" class="form-control">
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Pincode:</label>
					<input type="text" name="pc" value="<?php  echo $entry['pincode']?>" class="form-control">
				</div></div></div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				 	<label>College:</label>
					<input type="text" name="cg" value="<?php  echo $entry['college']?>" class="form-control">
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
				 	<label>Department:</label>
					<input type="text" name="d" value="<?php  echo $entry['department']?>" class="form-control">
				</div></div></div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				 	<label>Branch:</label>
					<input type="text" name="b" value="<?php  echo $entry['branch']?>" class="form-control">
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
				 	<label>Semester:</label>
					<input type="text" name="s" value="<?php  echo $entry['semester']?>" class="form-control">
				</div>
				</div></div>
				<button class="btn btn-info " style="margin-left: 255px;">Update</button>
			</form>

			<div class="col-md-3"></div>
		</div>
	</div>
</div>


</body>
</html>


