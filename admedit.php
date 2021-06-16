<?php

include 'dbcon.php';
$id=$_GET['id'];
$data="select * from admform where id=$id";
$res=mysqli_query($con,$data);
$entry=mysqli_fetch_array($res);
		  
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

<form class="a" method="post" action="admupdate.php"> 
	<input type="hidden" name="id" value="<?php echo $entry['id']?>">
	Name:<br>
	<input type="text" name="n" value="<?php echo $entry['name']?>"><br><br>
	Email:<br>
	<input type="text" name="e" value="<?php echo $entry['email']?>"><br><br>
	phone: <br>
	<input type="text" name="p" value="<?php echo $entry['phone']?>"><br><br>
	DOB:<br>
	<input type="date" name="d" value="<?php echo $entry['DOB']?>"><br><br>
	address:<br>
	<textarea name="a"><?php echo $entry['address']?></textarea><br><br>
	12th Percentage:<br>
	<input type="text" name="pg" value="<?php echo $entry['12th_per']?>"><br><br>
	<input type="submit" name="" value="update" style="background-color:green;">

</form>
</body>
</html>