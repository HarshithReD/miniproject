<?php
	session_start();
	if(isset($_SESSION['userid'])&&(isset($_SESSION['username']))){
		include "header.php";
	?>
		<section id="main_body">

		
		</section>
		
		
	<?php

}
else{
	header("location:index.php");
}
?>


