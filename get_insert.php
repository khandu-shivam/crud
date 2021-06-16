<?php
include 'dbcon.php';

$u= $_POST['a'];
$p= $_POST['b'];

// echo $u;
// echo $p;

 $data="insert into student(username,password)value('$u','$p')"; //check by echo
 $res=mysqli_query($con,$data,);   //used to run insert query 
 if($res){
 	echo "data inserted";
 }
 else{
 	echo "data not inserted";
 }

?>
