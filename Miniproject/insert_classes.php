<?php
$con=mysqli_connect('localhost','root','','faculty');
$json=["success"=>0];
$id=$_POST['id'];
$yr=$_POST['year'];
$depart=$_POST['branch'];
$sec=$_POST['section'];
$query="INSERT INTO `$id`(`branch`, `section`, `year`) VALUES ('$depart','$sec','$yr')";
$res=mysqli_query($con,$query);
if($res){
	$json_array["success"]=1;
}
echo json_encode($json);
?>