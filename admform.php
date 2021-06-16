<?php
include 'admsession.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
	.a{
		border:2px solid ;
		border-style: dotted groove ridge double;
		width:250px;
		margin-left:485px;
		padding-left:50px; 
		padding-top:30px;
		height:400px;
		background-color:#f7d7d7;

	}
</style>
</head>
<body>

<form class="a" method="post" action="adminsert.php"> 

     <input type="text" name="sid" value="<?php  echo $_SESSION['sid']   ?>"> <br>

 	Name:<br>
	<input type="text" name="n" value="<?php echo $_SESSION['name'] ?>" ><br><br>
	Email:<br>
	<input type="text" name="e" value="<?php echo $_SESSION['email'] ?>"><br><br>
	phone: <br>
	<input type="text" name="p"><br><br>
	DOB:<br>
	<input type="date" name="d"><br><br>
	address:<br>
	<textarea name="a"></textarea><br><br>
	12th Percentage:<br>
	<input type="text" name="pg"><br><br>
	<input type="submit" name="">

</form>
</body>
</html>