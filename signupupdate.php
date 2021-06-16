<?php

include 'dbcon.php';

$id=$_POST['id'];
$a1= $_POST['fn'];
$b1= $_POST['e'];
$c1= $_POST['p'];
$d1= $_POST['cp'];
$e1= $_POST['d'];
$f1= $_POST['pn'];
$g1= $_POST['c'];
$h1= $_POST['g'];
$i1= $_POST['q'];
$imp=implode(',', $i1);

echo $a1 ."<br>";
echo $b1 ."<br>";
echo $c1 ."<br>";
echo $d1 ."<br>";
echo $e1 ."<br>";
echo $f1 ."<br>";
echo $g1 ."<br>";
echo $h1 ."<br>";
echo $imp ."<br>";

$entry="update signup set full_name='$a1',email='$b1',password='$c1',confirm_password='$d1',DOB='$e1',phone_number='$f1',college='$g1',gender='$h1',qualification='$imp' where id=$id";

$res=mysqli_query($con,$entry);  
 if($res){
 	echo "data inserted" ;
 }
 else{
 	echo "data not inserted" ;
 }



?>