
		<?php

		session_start();

	$eid=$_SESSION["email_id"];
	//echo $eid;
	$pass=$_POST["txtpasso"];
	//echo $pass;
	$pass1=$_POST["txtpass1"];
	$pass2=$_POST["txtpass2"];
	$con=mysql_connect('localhost','root','');
	mysql_select_db('tech_ques',$con);
	$res=mysql_query("select * from user_tbl where email_id='$eid' and u_pwd='$pass'",$con);
	$count=mysql_num_rows($res);
	//echo $count;
	//echo $pass;
if($count==1)
{
	if($pass1==$pass2)
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("update user_tbl set u_pwd='$pass2'  where email_id='$eid'",$con);
		//echo "chng";
		//Header('location:questdisplay.php');
		echo '<script language="javascript">;
							  		alert("Your Password Is Changed");
							  		window.location.href="questdisplay.php";
							  		</script>';
	}
	else
	{
		echo '<script language="javascript">;
							  		alert("Your Password is Not Changed");
							  		window.location.href="questdisplay.php";
							  		</script>';
	}
}
else
{
	
	echo " old pass wrong";
}
?>