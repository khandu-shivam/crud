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
	<h1>Registration-Form</h1>
	<form method=post action=signupinsert.php>
		<div class="form-group">
			<label>full name</label>
			<input type="text" name="fn" class="form-control">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="e" class="form-control">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="password" name="p" class="form-control">
		</div>
		<div class="form-group">
			<label>confirm password</label>
			<input type="password" name="cp" class="form-control">
		</div>
		<div class="form-group">
			<label>DOB</label>
			<input type="date" name="d" class="form-control">
		</div>
		<div class="form-group">
			<label>phone number</label>
			<input type="text" name="pn" class="form-control">
		</div>
		<div class="form-group">
			<label>college</label>
			<select class="form-control" name="c">
				<option>select</option>
				<option>mits</option>
				<option>ips</option>
				<option>itm</option>
				<option>rjit</option>
				<option>mpct</option>
			</select>
		</div>
		<div class="form-group">
			<label>gender</label>
			<input type="radio" value="male" name="g" > male
			<input type="radio" value="female" name="g" > female
		</div>
		<div class="form-group">
			<label>qualification</label>
			<input type="checkbox" value="10th" name="q[]" >10th 
			<input type="checkbox" value="12th" name="q[]" >12th 
			<input type="checkbox" value="graduation" name="q[]" >graduation
			<input type="checkbox" value="post graduation" name="q[]" >post graduation
		</div>
		<button type="submit" class="btn btn-info">submit</button>
		

	</form>
</div>
</body>
</html>