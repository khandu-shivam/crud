<?php

include 'dbcon.php';
$id=$_GET['id'];
$data="delete from admform where id=$id";
$res=mysqli_query($con,$data);
header('location:admdisplay.php');

?>