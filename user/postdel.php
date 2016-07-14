<?php

	session_start();

		$q_id=$_REQUEST["id"];
		require  '../database.php';
		$obj=new database();
		$res=$obj->postdel($q_id);
		echo $q_id;
		if($res==1)
		{
			//echo "successful";
			Header('location:mypost.php');
		}
		else
		{
			echo "Not successful";
		}
?>