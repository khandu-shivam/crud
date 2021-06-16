<?php

include 'dbcon.php';
$id=$_GET['id'];
$data="delete from signup where id=$id";
$res=mysqli_query($con,$data);
header('location:signupdisplay.php'); 


?>