<?php
$con=mysqli_connect('localhost','root','','users');
$json_array=["success"=>0];
$id=$_POST['id'];
$yr=$_POST['year'];
$depart=$_POST['branch'];
$sec=$_POST['section'];
$x=$yr.','.$depart.','.$sec;
$query="SELECT `classes` FROM `flogin` WHERE `id`='$id'";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$x1=$row['classes'];
if($x1==null){
$query1="UPDATE `flogin` SET `classes`='$x' WHERE `id`='$id'";
$res1=mysqli_query($con,$query1);
if($res1)
	$json_array["success"]=1;
}
else{
$y=$x1.';'.$x;
$query2="UPDATE `flogin` SET `classes`='$y' WHERE `id`='$id'";
$res2=mysqli_query($con,$query2);
if($res2)
	$json_array["success"]=1;
}

$json_array["success"]=1;
echo json_encode($json_array);
?>