<!DOCTYPE html>

<?php

		$id=$_REQUEST["id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->getdata6($id);
		if($res==1)
		{
			header('location:user.php');
		}
		else
		{
			echo "Not successful";
		}
?>