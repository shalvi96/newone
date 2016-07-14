<?php
session_start();
		$sub_id=$_POST["txtid"];
		
		
		$name=$_POST["txtcatname"];	
	/*	$con=mysql_connect('localhost','root','');
			 mysql_select_db('tech_ques',$con);
		$res=mysql_query("update subject_tbl set sub_name='$name' where sub_id='$sub_id'",$con);
			*/
		require  '../database.php';
		$obj=new database();
		$res=$obj->getdata3($sub_id,$name);
		echo $res;
		if($res==1)
		{
			//echo 'yes';
			header('location:subject.php');
			
		}
		else
		{
			echo 'Not Successfull';
		}

		
?>
