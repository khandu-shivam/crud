<?php
session_start();
include 'dbcon.php';
$email=$_POST['e'];
$pass=$_POST['p'];

echo $email ."<br>";
echo $pass ."<br>";

 $data="select * from admsignup where (email='$email' and password='$pass')";
 $res=mysqli_query($con,$data);
 // echo $res;
 print_r($res) ;
 echo "<br>";

   $total=mysqli_num_rows($res);
  echo $total;

  $ans=mysqli_fetch_array($res);
  echo $ans['full_name'];
  // echo "<pre>";
  // print_r($ans);


if ($total==1){
	$_SESSION['email']=$email;
	$_SESSION['name']=$ans['full_name'];
	$_SESSION['sid']=$ans['id'];
	$_SESSION['success']="login succesfully";
	header('location:admdashboard.php');
}
else{
	 // echo '<script>alert("wrong")
	 // window.location.href="login.php"</script>';
	$_SESSION['error']="wrong email and passsword";
	header('location:admlogin.php');
} 
?>