<?php

include 'dbcon.php';

$n=$_POST['name'];
$filename=$_FILES['image'] ['name'];
// echo "<pre>";
// print_r($filename);
$tempname=$_FILES['image'] ['tmp_name'];
$file="upload/ .$filename";
move_uploaded_file($tempname,$file);

$data="insert into image(name,image) values ('$n','$file')";
$res=mysqli_query($con,$data);

?>