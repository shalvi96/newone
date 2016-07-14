
<?php
session_start();
?>
<?php 
			$email=$_SESSION["email_id"];
			$name=$_POST["txtname"];
			$mob=$_POST["txtmob"];
			$gen=$_POST["txtgen"];
			echo $email;
				$con=mysql_connect('localhost','root','');
				mysql_select_db('tech_ques',$con);
				$res=mysql_query("update user_tbl set u_name='$name',u_mob='$mob',u_gender='$gen' where email_id='$email' ",$con);
 		if($res==1)
		{
			Header('location:questdisplay.php');
		}
		else
		{
			echo "Not";
		}
	
?>