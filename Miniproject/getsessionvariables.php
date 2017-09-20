<?php
session_start();
$json_array['profile']=$_SESSION['profile'];
if($json_array['profile']=="faculty"){
	$id=$_SESSION['userid'];
	$con=mysqli_connect('localhost','root','','users');
	$q="SELECT * FROM `flogin` WHERE `id` = '$id'";
	$res=mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($res);
	$json_array['classes']=$row['classes'];

}
echo json_encode($json_array);

?>