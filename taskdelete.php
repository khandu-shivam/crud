<?php

include 'dbcon.php';

$id=$_GET['id'];
$data="delete from task where id='$id'";
$result=mysqli_query($con,$data);
header('location:taskdisplay.php');

