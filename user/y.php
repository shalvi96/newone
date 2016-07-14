
<?php
session_start();
?>
<?php 

			$q_id=$_SESSION["q_id"];
			$title=$_POST["txttitle"];
			$des=$_POST["areaedit"];
			$sub=$_POST["txtsub"];

			
				$con=mysql_connect('localhost','root','');
				mysql_select_db('tech_ques',$con);
				$res=mysql_query("update question_tbl set q_title='$title',q_des='$des',fk_sub_id='$sub' where q_id='$q_id' ",$con);
 		if($res==1)
		{
			Header('location:mypost.php');
		}
		else
		{
			echo "Not";
		}
	