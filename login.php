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
	<h1>Login-page</h1>
	<form method=post action=logininsert.php>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="e" class="form-control">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="text" name="p" class="form-control">
		</div>

		<button type="submit" class="btn btn-info">submit</button>
	</form>
</div>
</body>
</html>