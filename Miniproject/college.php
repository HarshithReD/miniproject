<?php
session_start();
$json_array[]="";

$con=mysqli_connect("localhost","root","","discussion");

$q = "SELECT * FROM `college`";
$res=mysqli_query($con,$q);

$rows=mysqli_num_rows($res);
$i=1;

while($row=mysqli_fetch_assoc($res))
{
 		$json_array[$i]["sender"] = $row['sender'];
	 	$json_array[$i]["message"]= $row['data'];
	 	$json_array[$i]["date"] =$row['date'];
	
		$i++;
}
$json_array["rows"]=$i-1;
	
echo json_encode($json_array);



?>