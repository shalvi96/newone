<?php
	
		$all=implode(",",$_POST["chk"]);
		//echo $all;
		require 'database.php';
		$obj=new database();
		$res=$obj->muldel($all);
		header('location:subject.php');
?>