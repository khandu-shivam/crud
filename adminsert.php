<?php

include 'dbcon.php';

$std=$_POST['sid'];
$a1= $_POST['n'];
$b1= $_POST['e'];
$c1= $_POST['p'];
$d1= $_POST['d'];
$e1= $_POST['a'];
$f1= $_POST['pg'];

echo $a1 ."<br>";
echo $b1 ."<br>";
echo $c1 ."<br>";
echo $d1 ."<br>";
echo $e1 ."<br>";
echo $f1 ."<br>";

$entry="insert into admform(name,email,phone,DOB,address,12th_per,student_id) values ('$a1','$b1','$c1','$d1','$e1',$f1,$std)";

$res=mysqli_query($con,$entry);   //used to run insert query 
 if($res){
 	 echo "data inserted" ;
 	  header('location:admdisplay.php');
 }
 else{
 	echo "data not inserted" ;
 }



?>