<?php
session_start();
$json_array=["success"=>0];
$con=mysqli_connect("localhost","root","","discussion");
$userid= $_SESSION['userid'];
$date=date("Y-m-d");
$data=$_POST['posted_data'];
$department=$_SESSION['department'];
$q="INSERT INTO `$department` (`sender`, `date`, `data`, `comments`) VALUES ('$userid', '$date', '$data', '');";
$res=mysqli_query($con,$q);
if($res){
	$json_array["success"]=1;
	
}
echo json_encode($json_array);
?>