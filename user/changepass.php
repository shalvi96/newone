<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>

<?php
session_start();


	$email=$_SESSION["email_id"];
	$pass=$_POST["txtpasso"];
	$pass1=$_POST["txtpass1"];
	$pass2=$_POST["txtpass2"];
	$con=mysql_connect('localhost','root','');
	mysql_select_db('tech_ques',$con);
	$res=mysql_query("select * from user_tbl where email_id='$email' and u_pwd='$pass'",$con);
	$count=mysql_num_rows($res);
	echo $count;
	//echo $pass;
if($count==1)
{
	if($pass1==$pass2)
	{
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("update user_tbl set u_pwd='$pass2'  where email_id='$email'",$con);
		echo "chng";
		Header('location:questdisplay.php');
	}
	else
	{
		echo "password not match";
	}
}
else
{
	
	echo " old pass wrong";
}
?>