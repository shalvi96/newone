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
 	<?php	include '/user_header.php'; ?>
 	</div>
 </div>   

<div class="row">
			<div class="col-md-9 col-sm-9">

  <?php
  									 $eid=$_SESSION["email_id"];
  									 
  									$q_id=$_REQUEST["q_id"];
  									
  									//echo $q_id;
 								 require '../database.php';
							  	$obj=new database();
							  	$res=$obj->displayq($q_id);

							  	while ($row=mysql_fetch_assoc($res))
							  	 {

												echo '<div class="row">
											 	<div class="col-md-9 col-sm-9">
											 	
											 	<div class="panel panel-info">
											  <!-- Default panel contents -->
											  <div class="panel-heading">Questions</div>
											  <div class="panel-body">
											    <li class="list-group-item">'.'<h3>'.$row["q_title"].'</h3>'.'</td>
											  </div>

											  <!-- List group -->
											  <ul class="list-group">
											   	 	
								  	 	 		<li class="list-group-item">'."Question:".'&nbsp;&nbsp;&nbsp;'.'<h4>'.$row["q_des"].'</h4>'.'<h5 style="margin-left: 60%;">'.'</br>'."Posted By:".$row["u_name"].'</br>'.$row["q_date"].'</br>'.$row["sub_name"].'</h5>'.'</td> 
											    </ul>
											</div>
											</div>
											 </div>';   
							  	 }


							  	 	$obj=new database();
							  	$res=$obj->displaya($q_id);
							  	$cnt=mysql_num_rows($res);
							  	$_SESSION["q_id"]=$q_id;
							  	echo '<h3>'.$cnt."Answers".'</h3>';
							  	while ($row=mysql_fetch_assoc($res))
							  	 {
							  	 				
												echo '<div class="row">
											 	<div class="col-md-9 col-sm-9">
											 	
											 	<div class="panel panel-info">
											  <!-- Default panel contents -->
											  <div class="panel-heading">Answer:</div>
											  
											    
											  

											  <!-- List group -->
											  <ul class="list-group">
											   	 	
								  	 	 		<li class="list-group-item">'.'&nbsp;&nbsp;&nbsp;'.'<h4>'.$row["ans_des"].'</h4>'.'<h5 align="left" style="margin-left: 60%;">'.'</br>'."Answered By:".$row["u_name"].'</br>'."Date:".$row["ans_date"].'</h5>'.'</td>
											    </ul>
											</div>
											</div>
											 </div>';   
							  	}
							  						


?>
<form action="addans.php" method="post">
 
											 			<div id="sample">
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      //]]>
      </script>
      <h4>
        Your Answer:
      </h4>
      <textarea name="area1" style="width: 850px;">
    
    
      </textarea><button type="submit" name="btnpost" class="btn btn-primary">Post</button>
    </div>
       
	</form> </div>



      
      <div class="col-md-3 col-sm-3">
        <?php include 'sidebar.php'; ?>
      </div>

</div>
 



 <div class="row">
      
      <div class="col-md-12 col-sm-12">
        <?php include '../footer.php'; ?>
      </div>

</div>
</body>
</html>