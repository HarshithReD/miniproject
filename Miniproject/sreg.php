<?php
session_start();
if(($_SESSION['userid'])=='admin'){?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/sreg.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/csssreg.css" rel="stylesheet">
<div id="view" style="display:none" class="alert alert-success"></div>

<div id="heading"><center><h2>ADMIN PANEL</h2></center></div>
<button id="logout" class="btn btn-default">LOGOUT</button>
<script>
$('#logout').click(function(){
	location.href='logout.php';
});</script>
<div id="student">
<div id="sr"><h4><b>STUDENT REGISTRATION</b></h4>
<form name="regs" action="sreg.php" onsubmit="return slogin()" method="post">
	<input type="text" name="srno" id="srno" class="input-sm" placeholder="enter your id" ><br>
	<input type="text" name="sname" id="sname" class="input-sm" placeholder="enter your name" ><br>
	<input type="password" name="spass" id="spass" class="input-sm" placeholder="enter your password" ><br>
	<input type="text" name="sbranch" id="sbranch" class="input-sm" placeholder="enter your branch" ><br>
	<input type="text" name="ssection" id="ssection" class="input-sm" placeholder="enter your section" ><br>
	<input type="text" name="syr" id="syr" class="input-sm" placeholder="enter your year" ><br>
	<input type="submit" name="ssub" id="ssub" class="btn-default" value="Register"></div><br><br><br>
</form>
<div id="sd">
<h4><b>DELETE STUDENT FROM LIST</b></h4><br>
<form name="sdel" action="sreg.php" method="post">
	<input type="text" name="dels" id="dels" maxlength="20" class="input-sm" placeholder="id which has to be deleted">
	<input type="submit" name="sdelete" id="sdelete"  class="btn-default" value="Delete">
</form>
</div> 
<div id="su"><h4><b>UPDATE STUDENT DETAILS</b></h4><br>

<input type="text" name="rno" id="rno" class="input-sm" placeholder="Enter roll number which has to be updated" maxlength="35" size="40"><br>
<input type="checkbox" id="year" name="year" value="year">year<br>
<input type="checkbox" id="club" name="club" value="club">club<br>
<input type="text" class="input-sm" name="year" placeholder="Change year to.." id="yearbox" style="display:none">
<button id="changeyr" class="btn-default" style="display:none">change year</button><br>
<button id="addbtn" class="btn-default" style="display:none">add club</button>
<input type="text" class="input-sm" name="addclub" id="addclubbox" style="display:none">
<button id="add" class="btn-default" style="display:none">add</button><br>
<button id="deletebtn" class="btn-default" style="display:none">delete club</button>
<input type="text" class="input-sm" name="deleteclub" id="deleteclubbox" style="display:none">
<button id="delete" class="btn-default" style="display:none">delete</button>

</div></div>


<div id="faculty">
<div id="fr"><h4><b>FACULTY REGISTRATION</b></h4>
<form name="regf" action="sreg.php"  method="post">
	<input type="text" name="frno" id="frno" class="input-sm" placeholder="Enter faculty id" size="20" maxlength="15"><br>
	<input type="text" name="fname" id="fname" class="input-sm" placeholder="Enter faculty name" size="20" maxlength="15"><br>
	<input type="password" name="fpass" id="fpass" class="input-sm" placeholder="Enter faculty password" size="20" maxlength="15"><br>
	<input type="submit" name="fsub" id="fsub" class="btn-default" value="Register"><br>
	<b><h4></h4></b>
	
</form>
</div>

<div id="fd"><h4><b>DELETE FACULTY FROM LIST</b></h4><br>
<form name="fdel" action="sreg.php" method="post">
	<input type="text" name="delf" id="delf" maxlength="20" class="input-sm" placeholder="id which has to be deleted">
	<input type="submit" name="fdelete" id="fdelete" class="btn-default" value="Delete">
</form>
</div> 
<div id="addclass_body"><h4><b>SET FACULTY CLASSES</b></h4><BR>
	<input type="text" name="frollno" id="frollno" class="input-sm" placeholder="enter faculty id" size="20" maxlength="15"><br>
	<label> Set class</label><br>
	<select class="year" >
		<option value="year" >year</option>
		<option value="1" id="1" name="1">1st</option>
		<option value="2" id="2" name="2">2nd</option>
		<option value="3" id="3" name="3">3rd</option>
		<option value="4" id="4" name="4">4th</option></select>
	<select class="branch">
		<option value="branch" >branch</option>
		<option value="CSE" id="cse" name="cse">CSE</option>
		<option value="ECE" id="ece" name="ece">ECE</option>
		<option value="EEE" id="eee" name="eee">EEE</option>
		<option value="MECH" id="mech" name="mech">MECH</option>
		<option value="CIVIL" id="civil" name="civil">CIVIL</option></select>
	<select class="section">
		<option value="section">section</option>
		<option value="A" id="A" name="A">A</option>
		<option value="B" id="B" name="B">B</option>
		<option value="C" id="C" name="C">C</option>
		<option value="D" id="D" name="D">D</option>
	</select>
	<button id="addclass" class="btn-default">add class</button>
</div>
</div>

<?php
$conn=mysqli_connect('localhost','root','','users');
if(!$conn){
	echo "not connected";
}
if(isset($_POST['ssub'])){
	$sr=$_POST['srno'];
	$sn=$_POST['sname'];
	$sp=md5($_POST['spass']);
	$sb=$_POST['sbranch'];
	$ss=$_POST['ssection'];
	$sy=$_POST['syr'];
	$query="INSERT INTO `login` (`roll no`, `name`, `password`, `branch`, `section`, `year`) VALUES ('$sr', '$sn', '$sp', '$sb', '$ss', '$sy');";
	$res=mysqli_query($conn,$query);
	if(!$res)
		echo "failed";
	else{
		?>
		<script>
		$(window).scrollTop(0);
		$('#view').html('Student registered').css('display','');</script>
		<?php
		}
}

if(isset($_POST['fsub'])){
	$fr=$_POST['frno'];
	$fn=$_POST['fname'];
	$fp=md5($_POST['fpass']);
	$q="INSERT INTO `flogin` (`id`, `name`, `password`) VALUES ('$fr', '$fn', '$fp');";
	$result=mysqli_query($conn,$q);
	mysqli_close($conn);
	$conn1=mysqli_connect('localhost','root','','faculty');
	$q1="CREATE TABLE `faculty`.`$fr` ( `branch` CHAR(10) NOT NULL , `section` CHAR(1) NOT NULL , `year` INT NOT NULL ) ENGINE = InnoDB;";
	$result1=mysqli_query($conn1,$q1);
	mysqli_close($conn1);
	if(!$result&&!$result1)
		echo "failed";
	else{
		?><script>$(window).scrollTop(0);
		$('#view').html('Faculty registered').css('display','');</script>
		<?php
		}
}
if(isset($_POST['sdelete'])){
$id=$_POST['dels'];
$conn=mysqli_connect('localhost','root','','users');
$q1="DELETE FROM `login` WHERE `roll no`='$id'";
$res1=mysqli_query($conn,$q1);
if(!$res1)
	echo "failed";
else{
	?>
	<script>$(window).scrollTop(0);
	$('#view').html('Student deleted').css('display','');</script>
<?php}
}
if(isset($_POST['fdelete'])){
$id=$_POST['delf'];
$q1="DELETE FROM `flogin` WHERE `id`='$id'";
$res=mysqli_query($conn,$q1);
if(!$res)
	echo "failed";
else{
	?>
	<script>$(window).scrollTop(0);
	$('#view').html('Faculty deleted').css('display','');</script>
<?php
}
}

}
else{
	header('location:index.php');
}
?>