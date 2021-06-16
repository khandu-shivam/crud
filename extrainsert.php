<?php
include "dbcon.php";
$p=$_POST['property'];
$la=$_POST['lattitude'];
$lo=$_POST['longitude'];
$z=$_POST['zipcode'];
$s=$_POST['sale_or_rent'];
$pr=$_POST['price'];
$a=$_POST['area'];
$si=$_POST['size'];
$b=$_POST['bedroom'];
$ba=$_POST['bathroom'];
$r=$_POST['reception'];
$g=$_POST['garage'];
$f=$_POST['feature'];
$ats=implode(',',$f);
$pid=$_POST['pid'];
$h=$_POST['home'];
$ge=$_POST['gender'];
$ho=$_POST['houses'];

 echo $p,$la,$lo,$z,$s,$pr,$a,$si,$b,$ba,$r,$g,$ats,$pid,$h,$ge,$ho;


echo $data = "insert into extra(property,lattitude,longitude,zipcode,sale_or_rent,price,area,size,bedroom,bathroom,reception,garage,pid,home,gender,houses,feature)value('$p','$la','$lo','$z','$s','$pr','$a','$si','$b','$ba','$r','$g','$pid','$h','$ge','$ho','$ats')";
mysqli_query($con,$data);


?>