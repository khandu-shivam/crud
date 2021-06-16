<?php

session_start();

include 'dbcon.php';

$a=$_POST['e'];
$b=$_POST['p'];

echo $a ."<br>";
echo $b ."<br>";

 $data="select * from signup where (email='$a' and password='$b')";
 $res=mysqli_query($con,$data);
 // echo $res;
 // print_r($res) ;
 // echo "<br>";

  $total=mysqli_num_rows($res);
  echo $total;

if ($total==1){
	// $_SESSION['shivam']='I am the best';
	$_SESSION['email']=$a;


	header('location:dashboard.php');
}
else{
	 // echo '<script>alert("wrong")
	 // window.location.href="login.php"</script>';
	header('location:login.php');
}
?>
