
<?php
	session_start();
?>
<?php
	
	
	
	
		$password=$_POST["txtpass"];
		$cpassword=$_POST["txtpass1"];
		$email=$_POST["txtemail"];
			$name=$_POST["txtname"];
			$mob=$_POST["txtmob"];
			//$city=$_POST["txtcity"];
			$gender=$_POST["txtgen"];
			$type="user";
			

if($password==$cpassword)

		{
			
			$con=mysql_connect('localhost','root','');
			mysql_select_db('tech_ques',$con);
			$res=mysql_query("insert into user_tbl values('$email','$name','$password','$gender','$mob','null','$type')",$con);
			header('Location:mainheader.php');
		}	
		else
		{
			echo 'wrong pass';
		}
		
	
	
	
?>	
