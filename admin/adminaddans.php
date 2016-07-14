<?php
		session_start();
		$ans=$_POST["area"];
		$eid=$_SESSION["email_id"];
		$id=$_REQUEST["id1"];
		$d=date('d/m/yy');
		
		require 'database.php';
		$obj=new database();
		$res=$obj->addans("insert into answer_tbl
		(ans_id,fk_email_id,fk_q_id,ans_des,ans_date) 
		values('null','$eid','$id','$ans','$d')");
		
			if($res==1)
			{
				//echo $ans;
				//echo $id;
				//echo $d;
				//echo $eid;
				//echo "Posted";
					header('Location:queapproved.php');
				//echo "yes";
			}
			else
			{
				echo "wrong";
			}
			
		
/*
		session_start();

		$ans=$_POST["area1"];
		$eid=$_SESSION["email"];
		$q_id=$_REQUEST["id"];
		$date=date('d/m/y');
		echo $date;
		require '../database.php';
		$obj=new database();
			$res=$obj->addans("insert into answer_tbl
			(ans_id,fk_email_id,fk_q_id,ans_des,ans_date) 
			values('null','$eid','$q_id','$ans','$date')");
			echo $res;
			if($res==1)
			{
				//echo $email;
				echo "suc";
				//header('Location:questdisplay.php');
			}
			else
			{
				echo "wrong";
			}
	*/	
?>
