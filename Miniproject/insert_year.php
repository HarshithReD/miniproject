<?php
$json_array=["success"=>0];
$con=mysqli_connect('localhost','root','','users');
$data=$_POST['id'];
$data1=$_POST['year'];
$query="UPDATE `login` SET `year`='$data1' WHERE `roll no`='$data'";
$res=mysqli_query($con,$query);
if($res)
	$json_array["success"]=1;

echo json_encode($json_array);
?>