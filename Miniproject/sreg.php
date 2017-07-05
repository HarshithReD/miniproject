<?php
session_start();
if(isset($_SESSION['aid'])&&(isset($_SESSION['apass']))){?>
<?php } ?>
<center><h1>ADD AND DELETE MEMBERS</h1></center>


<link rel="stylesheet" href="css/sregcss.css">
<div id="sr"><h3>STUDENT REGISTRATION</h3>
<form name="regs" action="sreg.php" method="post">
<input type="text" name="srno" id="srno" class="box" placeholder="enter your id" size="20" maxlength="15"><br>
<input type="text" name="sname" id="sname" class="box" placeholder="enter your name" size="20" maxlength="15"><br>
<input type="password" name="spass" id="spass" class="box" placeholder="enter your password" size="20" maxlength="15"><br>
<input type="submit" name="ssub" id="ssub" value="REGISTER"></div><br>
<div id="sd"><h3>DELETE STUDENT FROM LIST</h3><br><form name="sdel" action="sreg.php" method="post">
<input type="text" name="dels" id="dels" maxlength="20" class="d" placeholder="id which has to be deleted">
<input type="submit" name="sdelete" id="sdelete" value="delete"></div> 
<div id="su"><h3>UPDATE STUDENT DETAILS</h3><br><form name="sup" action="sreg.php" method="post">
<input type="text" name="srno" id="srno" class="up" placeholder="enter your id" size="20" maxlength="15"><br>
<input type="text" name="sname" id="sname" class="up" placeholder="enter your name" size="20" maxlength="15"><br>
<input type="password" name="spass" id="spass" class="up" placeholder="enter your password" size="20" maxlength="15"><br>
<input type="submit" value="update" name="supdate" id="supdate"></div>

<hr width="1" size="800">

<div id="fr"><h3>FACULTY REGISTRATION</h3>
<form name="regf" action="sreg.php" method="post">
<input type="text" name="frno" id="frno" class="box" placeholder="enter your id" size="20" maxlength="15"><br>
<input type="text" name="fname" id="fname" class="box" placeholder="enter your name" size="20" maxlength="15"><br>
<input type="password" name="fpass" id="fpass" class="box" placeholder="enter your password" size="20" maxlength="15"><br>
<input type="submit" name="fsub" id="fsub" value="REGISTER"></div>
<div id="fd"><h3>DELETE FACULTY FROM LIST</h3><br><form name="fdel" action="sreg.php" method="post">
<input type="text" name="delf" id="delf" maxlength="20" class="d" placeholder="id which has to be deleted">
<input type="submit" name="fdelete" id="fdelete" value="delete"></div> 
<div id="fu"><h3>UPDATE FACULTY DETAILS</h3><br><form name="fup" action="sreg.php" method="post">
<input type="text" name="frno" id="frno" class="up" placeholder="enter your id" size="20" maxlength="15"><br>
<input type="text" name="fname" id="fname" class="up" placeholder="enter your name" size="20" maxlength="15"><br>
<input type="password" name="fpass" id="fpass" class="up" placeholder="enter your password" size="20" maxlength="15"><br>
<input type="submit" value="update" name="fupdate" id="fupdate"></div>

<?php
$conn=mysqli_connect('localhost','root','','users');
if(!$conn){
	echo "not connected";
}
if(isset($_POST['ssub'])){
$sr=$_POST['srno'];
$sn=$_POST['sname'];
$sp=$_POST['spass'];
$query="INSERT INTO `login`(`roll no`, `name`, `password`) VALUES ('$sr','$sn','$sp')";
$result=mysqli_query($con,$query);
if(!$result)
	echo "failed";
else{
	"success";
	}
}

if(isset($_POST['fsub'])){
$fr=$_POST['frno'];
$fn=$_POST['fname'];
$fp=$_POST['fpass'];
$q="INSERT INTO `flogin`(`id`, `name`, `password`) VALUES ('$fr','$fn','$fp')";
$res=mysqli_query($conn,$q);
if(!$res)
	echo "failed";
else{
	"success";
	}
}
if(isset($_POST['sdelete'])){
$id=$_POST['dels'];
$q1="DELETE FROM `login` WHERE `roll no`='$id'";
$res=mysqli_query($conn,$q1);
if(!$res)
	echo "failed";
else
	echo "deleted";
}
if(isset($_POST['fdelete'])){
$id=$_POST['dels'];
$q1="DELETE FROM `flogin` WHERE `id`='$id'";
$res=mysqli_query($conn,$q1);
if(!$res)
	echo "failed";
else
	echo "deleted";
}
if(isset($_POST['supdate'])){
$sr=$_POST['srno'];
$sn=$_POST['sname'];
$sp=$_POST['spass'];
$q="UPDATE `login` SET `roll no`='$sr',`name`='$sn',`password`='$sp' WHERE `roll no`='$sr'";
$res=mysqli_query($conn,$q);
if(!$res)
	echo "failed";
else
	echo "updated";
}
if(isset($_POST['fupdate'])){
$fr=$_POST['frno'];
$fn=$_POST['fname'];
$fp=$_POST['fpass'];
$q="UPDATE `login` SET `roll no`='$fr',`name`='$fn',`password`='$fp' WHERE `roll no`='$fr'";
$res=mysqli_query($conn,$q);
if(!$res)
	echo "failed";
else
	echo "updated";
}
?>


