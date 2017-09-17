<?php
session_start();
$json_array[]="";

$con=mysqli_connect("localhost","root","","calendar");

$q = "SELECT * FROM `college`";
$res=mysqli_query($con,$q);

$rows=mysqli_num_rows($res);
$i=1;

while($row=mysqli_fetch_assoc($res))
{
 		$json_array["college"][$i]["date"] = $row['date'];
	 	$json_array["college"][$i]["message"]= $row['message'];
	 	
	
		$i++;
}
$json_array["collegerows"]=$i-1;
	$department= $_SESSION['department'];
$q1="SELECT * FROM `$department`";
$res=mysqli_query($con,$q);

$rows=mysqli_num_rows($res);
$i=1;

while($row=mysqli_fetch_assoc($res))
{
	$json_array["department"][$i]["date"] = $row['date'];
	$json_array["department"][$i]["message"]= $row['message'];
	
	$i++;
}
$json_array["deptrows"]=$i-1;
$year=$_SESSION['year'];
$department= $_SESSION['department'];
$section=$_SESSION['section'];
$q2="SELECT * FROM `$year` WHERE `branch` = '$department' AND `section` = '$section'";
$res=mysqli_query($con,$q1);
if(!$res){
	echo "failed";
}
else{
$rows=mysqli_num_rows($res);
$i=1;
while($row=mysqli_fetch_assoc($res))
{
	$json_array["class"][$i]["date"] = $row['date'];
	$json_array["class"][$i]["message"]= $row['message'];
	$i++;
}
$json_array["clsrows"]=$i-1;
}
echo json_encode($json_array);
?>