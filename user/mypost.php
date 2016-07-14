<?php
	session_start();
	$email=$_SESSION["email_id"];
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function del(){
		return confirm("Are You Sure You Want To Delete???");
	}
</script>
	<title></title>
</head>

<body>
		<div class="row">
			<div class="col-md-12 col-sd-12">
					<?php	include '/user_header.php'; ?>	
			</div>
		</div>


		<div class="row">
			<div class="col-md-9 col-sd-9">
				
				<div class="panel panel-primary">
													<div class="panel-heading">
													<h3 align="center"><class="panel-title">My Post</h3>
													</div>
													<div class="panel-body">
													<table class="table">					
													<th>Question Title</th>
													<th>Action</th>
							<?php
							
							
								require '../database.php';
							  	$obj=new database();
							  	$res=$obj->mypost($email);
							  	//$cnt=mysql_num_rows($res);
							  	//$cnt=1;
							  	while ($row=mysql_fetch_assoc($res))
							  	 {
							  	 	
							  	 	echo '<tr>';
							  	 	echo '<h5>'.'<td>'.'<a href="displayq1.php?q_id='.$row["q_id"].'">'.'<h5>'.$row["q_title"].'</a>'.'</br>'.'</h5>';
								
									echo '</td>';
									echo '<td>'.'<a href="editpost.php?q_id='.$row["q_id"].'">'.'<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'.'&nbsp;';
									
									echo '<a href="postdel.php?id='.$row["q_id"].' "onClick="return del()">'.'<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>'.'</td>';
									
									echo '</tr>';			
							  	
							  	 }
							  ?>
							  </table>
			</div>
		</div>
</div>

		
					
			
			<div class="col-md-3 col-sd-3">
				
					<?php	include '/sidebar.php'; ?>	
			</div>


		</div>

		<div class="col-md-12 col-sm-12 col-xs-12">
    <?php include 'footer.php'; ?>
</div>
</body>
</html>