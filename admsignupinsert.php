<?php

include 'dbcon.php';

$a1= $_POST['fn'];
$b1= $_POST['e'];
$c1= $_POST['p'];
$d1= $_POST['cp'];
$e1= $_POST['pn'];
// $f1= $_POST['d'];
// $g1= $_POST['c'];
// $h1= $_POST['g'];
// $i1= $_POST['q'];

// $imp=implode(',',$i1);

echo $a1 ."<br>";
echo $b1 ."<br>";
echo $c1 ."<br>";
echo $d1 ."<br>";
echo $e1 ."<br>";
// echo $f1 ."<br>";
// echo $g1 ."<br>";
// echo $h1 ."<br>";
// echo $imp ."<br>";

$entry="insert into admsignup(full_name,email,password,confirm_password,phone_number) values ('$a1','$b1','$c1','$d1','$e1')";

$res=mysqli_query($con,$entry);   //used to run insert query 
 if($res){
 	// echo "data inserted" ;
 	 header('location:admlogin.php');
 }
 else{
 	echo "data not inserted" ;
 }



?>