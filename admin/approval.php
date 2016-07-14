<!DOCTYPE html>
<?php
		$id=$_REQUEST["id"];
		require  'database.php';
		$obj=new database();
		$res=$obj->approval($id);
		
		if($res==1)
		{
			header('location:needtoapprove.php');
		}
		else
		{
			echo "Not successful";
		}
?>