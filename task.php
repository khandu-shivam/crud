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

	<form method="post" action="taskinsert.php">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="n" class="form-control">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" name="e" class="form-control">
				</div>
				<div class="form-group">
				 	<label>Phone:</label>
					<input type="text" name="p" class="form-control">
				</div>
				<div class="form-group">
					<label>Address</label>
					<textarea name="a" class="form-control"></textarea>
				</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>City:</label>
					<input type="text" name="c" class="form-control">
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Pincode:</label>
					<input type="text" name="pc" class="form-control">
				</div></div></div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				 	<label>College:</label>
					<input type="text" name="cg" class="form-control">
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
				 	<label>Department:</label>
					<input type="text" name="d" class="form-control">
				</div></div></div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				 	<label>Branch:</label>
					<input type="text" name="b" class="form-control">
				</div></div>
			<div class="col-md-6">
				<div class="form-group">
				 	<label>Semester:</label>
					<input type="text" name="s" class="form-control">
				</div>
				</div></div>
				<button class="btn btn-info " style="margin-left: 255px;">Submit</button>
			</form>

			<div class="col-md-3"></div>
		</div>
	</div>
</div>


</body>
</html>
