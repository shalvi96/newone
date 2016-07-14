<!DOCTYPE html>
<?php
		$id=$_REQUEST["id"];
		require  '../database.php';
		$obj=new database();
		$res=$obj->getdata2($id);
		if($res==1)
		{
			header('location:subject.php');
		}
		else
		{
			echo "Not successful";
		}
?>