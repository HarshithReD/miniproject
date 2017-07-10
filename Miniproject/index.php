<?php
session_start();
?>

<?php
if(isset($_SESSION['userid'])&&(isset($_SESSION['username']))){
header('location:home.php');
}
else{
?>
<div id="admindiv">
<div id="flip"><h4> ADMIN</h4></div>
<div id="adminlogin">
<form name="f" action="index.php" method="post">
<div id="s"><input type="text" class="sign" maxlength="15" placeholder="enter id" id="name">
<img src="download.jpg" width="20"></div><br>
<input type="password" name="password" class="sign" maxlength="15" placeholder="enter password"><br>
<input type="submit" name="submit"  value="LOGIN">
</form>
</div>
</div>
<div id="wrapper">

<div id="slogin"><h1>Student Login</h1><br>
<form name="form1" action="index.php" method="post">
<input type="text" id="sid" name="sid" class="elements" placeholder="enter your name" ><br>
<input type="password" id="spass" name="spass" class="elements" placeholder="enter your password"><br>
<span id="sfeedback" style="display:none;"></span><br>
<input type="submit" id="sub"  name="sub" value="LOGIN">
</form></div>



<div id="s"><img src="images.png" id="savatar"/></div>
<div id="f"><img src="download.jpg" id="favatar"/></div>



<div id="flogin"><h1>Faculty Login</h1><br>
<form name="form2" action="index.php" method="post">
<input type="text" id="fid" name="fid" class="elements" placeholder="enter your name"><br>
<input type="password" id="fpass" name="fpass" class="elements" placeholder="enter your password"><br>
<span id="ffeedback" style="display:none;"></span><br>
<input type="submit" id="sub1"  name="sub1" value="LOGIN">
</form></div>
</div>
<?php
}
?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/index_duplicate.js"></script>


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
	 $pass=$_POST['spass'];
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
		$_SESSION['department']=$row['department'];
		$_SESSION['branch']=$row['branch'];
		$_SESSION['profile']="student";
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
	session_start();
	$_SESSION['aid']='vbitadmin';
	$_SESSION['apass']='admin';
	if(isset($_SESSION['aid'])&&(isset($_SESSION['apass']))){
		
	}

	else{
		echo "Incorrect username or password";
	}
}

?>