<div class="list-group">
  							<a href="#" class="list-group-item active">
    							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Subjects Available
  							</a>
<?php
								//require '../database.php';
							  	$obj=new database();
							  	$res=$obj->displaysub();
							  	$count=mysql_num_rows($res);
							  	
?>
					<a href="questdisplay.php" class="list-group-item">ALL SUBJECTS<span class="badge"><?php echo $count; ?></span></a>

					 <?php
							  	
							  	$obj1=new database();
							  	$res1=$obj1->sub_displaybycount();
							  	while ($row=mysql_fetch_assoc($res1))
							  	 {
							  	 	echo'
							  	<a href="questbysub1.php?id='.$row["sub_id"].'" class="list-group-item">'.$row["sub_name"].' <span class="badge">'.$row["cnt"].'</span></a>';
							  		
							  	}
							  
							  ?>
  
</div>