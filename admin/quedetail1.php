<?php
session_start();
$id=$_REQUEST["id"];
?>
<!DOCTYPE html>
<html>
<head>
    <link href="../Content/bootstrap.min.css" rel="stylesheet" />
   <script src="../Scripts/jquery-1.9.1.min.js"></script>
   <script src="../Scripts/bootstrap.min.js"></script>

</head>

<body class="container">
<center>

<table class="table">   
<div class="row">
<?php include 'a_header.php'; ?>
</div>
  <!-- Table -->  
<div class="row">
<div class=" col-md-12">
<?php
		
		$email=$_SESSION["email_id"];
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from question_tbl",$con);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		$q_id=$row["q_id"];
		$q_desc=$row["q_des"];
		$q_date=$row["q_date"];		
		}
	
?>
  <?php
	
	$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from question_tbl where q_id='$id'",$con);
		while($row=mysql_fetch_assoc($res))
		{
			
echo '<div class="row">
<div class="col-md-12 col-sm-12">
											 	
<div class="panel panel-primary">
<!-- Default panel contents -->
<div class="panel-heading">Question:</div>
											  

<!-- List group -->
<ul class="list-group">
<li class="list-group-item">'.'&nbsp;&nbsp;&nbsp;'.$row["q_des"].'
<h5 align="left" style="margin-left: 75%;">'.'</br>'."email_id:".$row["fk_email_id"].'
</br>'."Date:".$row["q_date"].'</h5>'.'</td>
</ul>
</div>
</div>
</div>';
}
?>
</div>
</div>

 </table>
</body>
</html>

