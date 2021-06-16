<?php
include 'dbcon.php';

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

$data="insert into task(name,email,phone,address,city,pincode,college,department,branch,semester)values('$a1','$b1','$c1','$d1','$e1','$f1','$g1','$h1','$i1','$j1')";
$result=mysqli_query($con,$data);

if($result){
	echo "data inserted "."<br>";
}
else{
	echo "not inserted" ."<br>";
}

?>