<?php
session_start();
$json_array=["success"=>0];
$con=mysqli_connect("localhost","root","","discussion");
$userid=$_SESSION['userid'];
$date=date("Y-m-d");
$data=$_POST['posted_data'];
$department=$_POST['department'];
$year=$_POST['year'];
$section=$_POST['section'];
$query="INSERT INTO `$year` (`sender`, `date`, `data`, `comments`, `branch`, `section`) VALUES ('$userid', '$date', '$data', '', '$department', '$section');";
$res=mysqli_query($con,$query);
if($res){
	$json_array["success"]=1;
}
echo json_encode($json_array);
?>