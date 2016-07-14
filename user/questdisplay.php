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
  <div class="panel-heading">
    <h3 align="center"><class="panel-title">Questions</h3>
  </div>
  
 
    <table class="table">

 
<?php
							
							
								require '../database.php';
							  	$obj=new database();
							  	$res=$obj->ques_display();
							  	while ($row=mysql_fetch_assoc($res))
							  	 {

								  	 	echo "<tr>";
								  	 	echo "<td>".$row["sub_name"].'<div>Subject'."</td>"."<td>".$row["q_view"].'<div>view</div></div></div>'."</td>"."<td>".'<h4>'.'<a href="displayq1.php?q_id='.$row["q_id"].'">'.$row["q_title"].'</a>'.'&nbsp;&nbsp;'.'</h4>'."</td>".'</br>'."<td>".'<h5 style="margin-left: 60%;">'.'&nbsp;&nbsp;&nbsp;'.'</br>'.'&nbsp;&nbsp;&nbsp;'.'</br>'."Posted By:".'&nbsp;&nbsp;'.$row["u_name"].'</br>'.'</br>'."Date".'&nbsp;&nbsp;'.$row["q_date"].'</h5>'.'<hr>'."</td>"; 
										echo "</tr>";
							  	 }
							  	 //$q_id=$_SESSION["q_id"];
							  	 //echo $email;
?>
</table>
</ul>

</div>
</div>
	<div class="col-md-3 col-sm-3">
	<?php	require 'sidebar.php'; ?>
 </div>   
</div>
<div class="col-md-12 col-sm-12">
	<?php	require 'footer.php'; ?>
 </div>
</body>
</html>