<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit'])){
 $name=$_POST['name'];
 $father_name=$_POST['father_name'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $state=$_POST['state'];
 $dateob=$_POST['birth_date'];
 $number=$_POST['number'];
 $course=$_POST['course'];
 $email=$_POST['email'];
 
mysqli_query($conn,"INSERT INTO student(name,father,address,gender,state,dateob,number,course,email) VALUES('".$name."','".$father_name."','".$address."','".$gender."','".$state."','".$dateob."','".$number."','".$course."','".$email."')");


}
?>
