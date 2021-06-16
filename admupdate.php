<?php
include 'dbcon.php';

$id=$_POST['id'];
$a1=$_POST['n'];
$b1=$_POST['e'];
$c1=$_POST['p'];
$d1=$_POST['d'];
$e1=$_POST['a'];
$f1=$_POST['pg'];

echo $a1 ."<br>";
echo $b1 ."<br>";
echo $c1 ."<br>";
echo $d1 ."<br>";
echo $e1 ."<br>";
echo $f1 ."<br>";

$data="update admform set name='$a1',email='$b1',phone='$c1',DOB='$d1',address='$e1',12th_per='$f1' where id=$id";
$res=mysqli_query($con,$data);
 header('location:admdisplay.php');
?>