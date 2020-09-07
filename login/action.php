<?php
$ip="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($ip,$username,$password,$dbname);
if($conn->query('insert into student values("adsda","sdaa","aaa","aaaa","aaa","aaa",89,"aa","aaa"')){
echo "successful";}
else{
echo "failed";}
?>