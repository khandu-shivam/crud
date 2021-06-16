<?php

include 'dbcon.php';
$id=$_GET['id'];
$data="select * from signup where id=$id";
$result=mysqli_query($con,$data);
$entry=mysqli_fetch_array($result);

$i1=$entry['qualification'] ; 
$exp=explode(',',$i1);  
?>

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
	<form method=post action=signupupdate.php>
		<input type="hidden" name="id" value="<?php echo $entry['id'] ?>">
		<div class="form-group">
			<label>full name</label>
			<input type="text" name="fn" class="form-control" value="<?php echo $entry['full_name']?>">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" name="e" class="form-control" value="<?php echo $entry['email'] ?>">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="password" name="p" class="form-control" value="<?php echo $entry['password'] ?>">
		</div>
		<div class="form-group">
			<label>confirm password</label>
			<input type="password" name="cp" class="form-control" value="<?php echo $entry['confirm_password'] ?>">
		</div>
		<div class="form-group">
			<label>DOB</label>
			<input type="date" name="d" class="form-control" value="<?php echo $entry['DOB'] ?>">
		</div>
		<div class="form-group">
			<label>phone number</label>
			<input type="text" name="pn" class="form-control" value="<?php echo $entry['phone_number'] ?>">
		</div>
		<div class="form-group">
			<label>college</label>
			<select class="form-control" name="c">
				<option>select</option>
				<option
				<?php
				if($entry['college']=="mits"){
					echo "selected";
				} ?>
				>mits</option>
				<option
				<?php
				if($entry['college']=="ips"){
					echo "selected";
				} ?>
				>ips</option>
				<option
				<?php
				if($entry['college']=="itm"){
					echo "selected";
				} ?>
				>itm</option>
				<option
				<?php
				if($entry['college']=="rjit"){
					echo "selected";
				} ?>
				>rjit</option>
				<option
				<?php
				if($entry['college']=="mpct"){
					echo "selected";
				} ?>
				>mpct</option>
			</select>
		</div>
		<div class="form-group">
			<label>gender</label>
			<input type="radio" value="male" name="g" 
			<?php
				if($entry['gender']=="male"){
					echo "checked";
				} ?>
			> male
			<input type="radio" value="female" name="g"
			<?php
				if($entry['gender']=="female"){
					echo "checked";
				} ?>
			 > female
		</div>
		<div class="form-group">
			<label>qualification</label>
			<input type="checkbox" value="10th" name="q[]" 
			<?php
				if(in_array("10th",$exp)){
					echo "checked";
				} ?>
			>10th 
			<input type="checkbox" value="12th" name="q[]" 
			<?php
				if(in_array("12th",$exp)){
					echo "checked";
				} ?>
			>12th 
			<input type="checkbox" value="graduation" name="q[]"
			<?php
				if(in_array("graduation",$exp)){
					echo "checked";
				} ?> 
			>graduation
			<input type="checkbox" value="post graduation" name="q[]"
			<?php
				if(in_array("post graduation",$exp)){
					echo "checked";
				} ?> 
			>post graduation
		</div>
		<button type="submit" class="btn btn-info">Update</button>
		

	</form>
</div>
</body>
</html>