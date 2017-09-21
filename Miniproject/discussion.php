<?php
session_start();
$json_array[]="";

$con=mysqli_connect("localhost","root","","discussion");
$department= $_SESSION['department'];
$q="SELECT * FROM `$department`";
$res=mysqli_query($con,$q);

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

$json_array["department"]=$department;
$json_array["rows"]=$i-1;
	
echo json_encode($json_array);



?>