<?php
	
		$all=implode(",",$_POST["chk"]);
		echo $all;
		require 'database.php';
		$obj=new database();
		$res=$obj->muldeluser($all);
		header('location:user.php');
?>