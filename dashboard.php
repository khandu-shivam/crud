<?php
include 'session.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- <h1>welcome shivam!! <?php echo $_SESSION['shivam'] ?></h1> -->
	<h1> welcome!! <?php echo $_SESSION['email'] ?></h1>
<br>
<a href="logout.php">logout</a>

</body>
</html>