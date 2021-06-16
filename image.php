<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!----for mobile responsive--->
</head>
<body>
<div class="container">
	<h1 class="text-center text-info">form-image</h1>
	<form method="post" action="imageinsert.php" enctype="multipart/form-data">
		<div class="form-group">
			<label>name</label>
			<input type="text" name="name" placeholder="username" class="form-control">
		</div>

		<div class="form-group">
			<label>image</label>
			<input type="file" name="image" class="form-control" placeholder="image">
		</div>
		<button type="submit" class="btn btn-info">submit</button>
	</form>
</div>
</body>
</html>