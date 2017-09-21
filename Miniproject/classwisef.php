<?php
session_start();
$json_array[]="";
$con=mysqli_connect("localhost","root","","discussion");
$year=$_POST['year'];
$department= $_POST['department'];
$section=$_POST['section'];
$q1="SELECT * FROM `$year` WHERE `branch` = '$department' AND `section` = '$section'";
$res=mysqli_query($con,$q1);
if(!$res){
	echo "failed";
}
else{
$rows=mysqli_num_rows($res);
$i=1;
while($row=mysqli_fetch_assoc($res))
{
	$json_array[$i]["sender"]=$row['sender'];
	$json_array[$i]["message"]=$row['data'];
	$json_array[$i]["date"]=$row['date'];
	$json_array[$i]["comments"]=$row['comments'];
	
	
	$i++;
}
$json_array["rows"]=$i-1;
	
echo json_encode($json_array);

}
?>