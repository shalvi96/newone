<?php

		session_start();

		$ans=$_POST["area1"];
		$eid=$_SESSION["email_id"];
		$q_id=$_SESSION["q_id"];
		//$date=date('d/m/y');
		$d=date('d/m/y');
		require '../database.php';
		$obj=new database();
			$res=$obj->addans("insert into answer_tbl(ans_id,fk_email_id,fk_q_id,ans_des,ans_date) values('null','$eid','$q_id','$ans','$d')");
			if($res==1)
			{
				//echo $eid;
				//echo $q_id;
				header('Location:questdisplay.php');
			}
			else
			{
				echo "wrong";
			}
		
?>
