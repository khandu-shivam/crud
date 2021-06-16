<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!----for mobile responsive--->
</head>
<style type="text/css">

  .a{
      background-color:#64696f;
    }
       .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 3.5rem;
    padding-left: .3rem;
}
.b{
	background: url("http://chitrahandicraft.com/wp-content/uploads/2019/02/login-page-background-images-hd-10.jpg");
}
.c{
	background: url("http://mitsgwalior.in/img/308600x320.jpg");
	background-repeat:no-repeat;
	background-size:cover;
}


</style>
<body class="c">

	 <nav class="navbar navbar-expand-md navbar-dark a">

  <a href="">
  <img src="https://upload.wikimedia.org/wikipedia/en/d/d6/Madhav_Institute_of_Technology_and_Science_logo.png" width="120px">
  </a>

  <button class="navbar-toggler" data-toggle="collapse" data-target="#d">
     <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="d">
  <ul class="navbar-nav ml-auto">
      <li class="">
        <a href="" class="nav-link " style="font-size:25px">Home</a>
      </li>
      <li class="">
        <a href="" class="nav-link" style="font-size:25px">About</a>
      </li>
      <li class="">
        <a href="" class="nav-link" style="font-size:25px">Courses</a>
      </li>
      <li class="">
        <a href="" class="nav-link" style="font-size:25px">Departments</a>
      </li>
      <li class="">
        <a href="" class="nav-link" style="font-size:25px">Faculties</a>
      </li>
      <li class="">
        <a href="" class="nav-link" style="font-size:25px">Training & Placement</a>
      </li>
      <li class="">
        <a href="" class="nav-link" style="font-size:25px">ContactUs</a>
      </li>
  </ul>
</div>
</nav>

<body>
<div class="container-fluid"><br><br><br><br><br>
	<div class="row">
	<div class="col-md-4"></div>

	<div class="col-md-4 b text-center">
	<h1>Registration-Form</h1>
	<form method=post action=admsignupinsert.php>
		<div class="form-group">
			<label style="font-size:25px;color:red;">full name</label>
			<input type="text" name="fn" class="form-control">
		</div>
		<div class="form-group">
			<label style="font-size:25px;color:red;">email</label>
			<input type="text" name="e" class="form-control">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
		<div class="form-group">
			<label style="font-size:25px;color:red;">password</label>
			<input type="password" name="p" class="form-control">
		</div></div>
		<div class="col-md-6">
		<div class="form-group">
			<label style="font-size:25px;color:red;">confirm password</label>
			<input type="password" name="cp" class="form-control">
		</div></div></div>
		<div class="form-group">
			<label style="font-size:25px;color:red;">phone number</label>
			<input type="text" name="pn" class="form-control">
		</div>
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-6">
		<div class="form-group">
			<label style="font-size:25px;color:red;">DOB</label>
			<input type="date" name="d" class="form-control">
		</div></div>
		<div class="col-md-6">
		<div class="form-group">
			<label style="font-size:25px;color:red;">college</label>
			<select class="form-control" name="c">
				<option>select</option>
				<option>mits</option>
				<option>ips</option>
				<option>itm</option>
				<option>rjit</option>
				<option>mpct</option>
			</select>
		</div></div></div>
		<div class="form-group">
			<label style="font-size:25px;color:red;">gender</label>
			<input type="radio" value="male" name="g" > male
			<input type="radio" value="female" name="g" > female
		</div>
		<div class="form-group">
			<label style="font-size:25px;color:red;">qualification</label>
			<input type="checkbox" value="10th" name="q[]" >10th 
			<input type="checkbox" value="12th" name="q[]" >12th 
			<input type="checkbox" value="graduation" name="q[]" >graduation
			<input type="checkbox" value="post graduation" name="q[]" >post graduation
		</div> -->
		<button type="submit" class="btn btn-info">submit</button><br>;
		

	</form>
</div>
<div class="col-md-4"></div>
</div></div>
</body>
</html>