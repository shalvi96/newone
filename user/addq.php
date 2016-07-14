
<?php
		
		session_start();
		$ans=$_POST["areaq"];
		$eid=$_SESSION["email_id"];
		$sub_id=$_POST["txtsub"];
		$title=$_POST["txttitle"];
		$d=date('d/m/y');
		echo $sub_id;
		require '../database.php';
		$obj=new database();
			$res=$obj->addans("insert into question_tbl(q_id,q_title,q_des,fk_email_id,fk_sub_id,q_view,q_date,q_flag,q_img) values('null','$title','$ans','$eid','$sub_id',0,'$d',0,'null')");
			if($res==1)
			{
				
				header('Location:questdisplay.php');
			}
			else
			{
				echo "wrong";
			}
		
?>