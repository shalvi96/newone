<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
    </head>
 <body class="container">
 <div class="row">
 	<div class="col-md-12 col-sm-12">
 	<?php	include 'user_header.php'; ?>
 	</div>
 </div>   

  <div class="row">
 	<div class="col-md-9 col-sm-9">
 	
 	<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Questions</div>
  <div class="panel-body">
    
  </div>

  <!-- List group -->
  <ul class="list-group">
   
    
  
<?php
								require '../database.php';
							  	$obj=new database();
							  	$id=$_REQUEST["id"];
							  	$res=$obj->displayquestbysub($id);
							  	while ($row=mysql_fetch_assoc($res))
							  	 {
							  	 		//echo $q_id;
								  	 	echo "<tr>";
								  	 	echo '<li class="list-group-item">'.'<div class="subject">
								  	 			<div class="mini-counts">
								  	 			<span title="1 subject">'.$row["sub_name"].'</span></div><div>Subject'.'<div class="view"><div class="mini-counts"><span title="1 vote">'.$row["q_view"].'</span></div><div>view</div></div></div>'.'&nbsp;&nbsp;&nbsp;&nbsp;'.'<a href="displayq1.php?q_id='.$row["q_id"].'">'.$row["q_title"].'</a>'.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.'</br>'.'<h5 style="margin-left: 60%;">'.'&nbsp;&nbsp;&nbsp;'.'</br>'.'&nbsp;&nbsp;&nbsp;'.'</br>'."Post
								  	 			ed By:".'&nbsp;&nbsp;'.$row["fk_email_id"].'</h5>'.'</li>'; 
										echo "</tr>";
							  	 }
							  	 //$q_id=$_SESSION["q_id"];
							  	 //echo $email;


?>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3">
	<?php	include 'sidebar.php'; ?>
</div>
 </div>  

<div class="col-md-12 col-sm-12 col-xs-12">
	<?php	include '../footer.php'; ?>
</div>
 </div>  
</body>
</html>