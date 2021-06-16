<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>MITS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
  background: url("https://albumizr.com/ia/64d51a3942a588013d1c215a35441370.jpg");
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


	<div class="container-fluid"><br><br><br>


		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 b text-center">

        <?php 
   if (isset($_SESSION['error'])) {
    ?>
    <h1 class="alert alert-danger">
    
    <?php 
    echo $_SESSION['error'];
    unset($_SESSION['error']); 
    ?> 
     </h1>

   <?php
   }
  ?>

  
  <h1 style="color:red;">Login-page</h1><br>

<form method="post" action="admlogininsert.php">
    <div class="form-group">
      <label style="color:red;font-size: 20px;">EMAIL:</label><br>
      <input type="text" name="e" class="form-control">
    </div>
    <div class="form-group">
      <label style="color:red;font-size: 20px;">PASSWORD:</label><br>
      <input type="password" name="p" class="form-control" >
    </div>

   <a href=""><h3 style="color:blue;">Forget Password?</h3></a> 


  <label style="font-size: 25px">Remember me:</label>
  <input type="checkbox" name="">
  <br><br>


     <!-- <form method="post" action="admlogininsert.php"> -->
  <input style="width:160px;height:40px;background:green;" type="Submit" name="" value="login">
</form>

 <br>
<!-- <p>Or login with</p>
<a href=""> <i class="fa fa-facebook" style="font-size:30px">Facebook</i></a>
<a href=""> <i class="fa fa-google" style="font-size:30px">Google</i></a> -->
<h4>Don't have account?</h4>
<a href="admsignup.php"><button style="background:green;width:160px;height:40px;">SignUp</button></a><br><br>


					 
				</div>
			</div>
		</div>
	</div>



</body>
</html>