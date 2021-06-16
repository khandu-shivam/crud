<?php
session_start();
if(empty($_SESSION['email'])){
	header('location:admlogin.php');
}
?>