<?php

include 'dbcon.php';

$id=$_POST['id'];
$a1=$_POST['n'];
$b1=$_POST['e'];
$c1=$_POST['p'];
$d1=$_POST['a'];
$e1=$_POST['c'];
$f1=$_POST['pc'];
$g1=$_POST['cg'];
$h1=$_POST['d'];
$i1=$_POST['b'];
$j1=$_POST['s'];

echo $a1 ."<br>";
echo $b1 ."<br>";
echo $c1 ."<br>";
echo $d1 ."<br>";
echo $e1 ."<br>";
echo $f1 ."<br>";
echo $g1 ."<br>";
echo $h1 ."<br>";
echo $i1 ."<br>";
echo $j1 ."<br>";

$data="update task set name='$a1',email='$b1',phone='$c1',address='$d1',city='$e1',pincode='$f1',college='$g1',department='$h1',branch='$i1',semester='$j1' where id=$id";
$result=mysqli_query($con,$data);
header('location:taskdisplay.php');
?>