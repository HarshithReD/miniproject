<?php
session_start();
?>

<?php
if(isset($_SESSION['userid'])&&(isset($_SESSION['username']))){
header('location:home.php');
}
else if(isset($_SESSION['userid'])){
	if(($_SESSION['userid'])=='admin')
	header('location:sreg.php');
}
else{
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/index_style.css" rel="stylesheet">
<div id="flip"> ADMIN</div>
<div id="adminlogin" style="display:none">
<form name="f" action="index.php" method="post">
<input type="text" class="input-sm" id="admintextbox" name="admintextbox" maxlength="15" placeholder="Enter your id.." id="name">
<img src="download.jpg" id="adminavatar" width="20"><br>

<input type="password" id="apass" name="apass" class="input-sm" maxlength="15" placeholder="Enter your password.."><img src="pass.png" id="adminimg" width="23"/><br>
<input type="submit" name="submit" class="btn btn-default" value="Login">
</form>
</div>


<div id="wrapper" class="container">
<span id="toggle"  style="display:none">login</span>





<div id="slogin" class="pull_left"><h2>Student Login</h2><br><br>
<form name="form1" action="index.php" method="post">
<input type="text" id="sid" name="sid" class="input-sm" placeholder="Enter your id.." >
<img src="images.png" id="savatar" width="23"/><br>
<input type="password" id="spass" name="spass" class="input-sm" placeholder="Enter your password.."><img src="pass.png" id="simg" width="23"/><br>
<span id="sfeedback" style="display:none;"></span><br>
<input type="submit" id="sub"  class="btn btn-default"  name="sub" value="Login">
</form></div>




<div id="flogin" class="pull_left"><h2>Faculty Login</h2><br><br>
<form name="form2" action="index.php" method="post">
<input type="text" id="fid" name="fid" class="input-sm"  placeholder="Enter your id..">
<img src="download.jpg" id="favatar" width="21"/>
<input type="password" id="fpass" name="fpass" class="input-sm" placeholder="Enter your password.."><img src="pass.png" id="fimg" width="23"/><br>
<span id="ffeedback" style="display:none;"></span><br>
<input type="submit" id="sub1"  class="btn btn-default"  name="sub1" value="Login">
</form></div>
</div>
<?php
}
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index.js"></script>


<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#adminlogin").slideToggle("slow");
		
    });
	
});

</script>



<?php 
 $con=mysqli_connect("localhost","root","","users");
	if(isset($_POST['sub'])){
	 $id=$_POST['sid'];
	 $pass=md5($_POST['spass']);
	 $q="SELECT * FROM `login` WHERE `roll no` = '$id' AND `password` = '$pass'";
	 $res=mysqli_query($con,$q);
	$rows=mysqli_num_rows($res);
	$row=mysqli_fetch_assoc($res);
	 if($rows==0){
		echo "failed";
	 }
	else
	{
		$_SESSION['userid']=$id;
		$_SESSION['username']=$row['name'];
		$_SESSION['section']=$row['section'];
		$_SESSION['department']=$row['branch'];
		$_SESSION['profile']="student";
		$_SESSION['year']=$row['year'];
		header('location:home.php');
	}
	}
	if(isset($_POST['sub1'])){
		$id=$_POST['fid'];
		$pass=$_POST['fpass'];
		$q="SELECT * FROM `flogin` WHERE `id` = '$id' AND `password` = '$pass'";
		$res=mysqli_query($con,$q);
	$rows=mysqli_num_rows($res);
	$row=mysqli_fetch_assoc($res);
	 if($rows==0){
		echo "failed";
	 }
	else
	{
		echo $_SESSION['userid']=$id;
		echo $_SESSION['username']=$row['name'];
		$_SESSION['department']=$row['department'];
		$_SESSION['branch']=$row['branch'];
		$_SESSION['profile']="faculty";
		
		header('location:home.php');
	}
	}
?>
<?php
if(isset($_POST['submit'])){
	$adminid=$_POST['admintextbox'];
	$adminpass=$_POST['apass'];
	if($adminid=="admin"&&$adminpass=="admin"){
		$_SESSION['userid']=$adminid;
		
			header('location:sreg.php');
	}
	else{
		echo "Incorrect username or password";
	}
}
?>