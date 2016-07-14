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
		<div class="col-md-9 col-sm-9 col-xs-9">
						<div class="panel panel-primary">
						  <div class="panel-heading">
						    <h3 class="panel-title">Question-Answer Block</h3>
						  </div>
						  <div class="panel-body">
						  <!--question-->
						   		<div class="row">
						   			
<?php
  									 $eid=$_SESSION["email_id"];
  									 
  									$q_id=$_REQUEST["q_id"];
  									
  									//echo $q_id;
 								 require '../database.php';
							  	$obj=new database();
							  	$res=$obj->displayq($q_id);

							  	while ($row=mysql_fetch_assoc($res))
							  	 {
							  	 		echo '<tr>';
										echo '<td>'.'<h3 style="margin-left: 5%;">'.$row["q_title"].'</h3>'.'</td>'.
												'<h4 style="margin-left: 5%;">'.$row["q_des"].'</h4>'.'<h5 style="margin-left: 80%;">'.'</br>'.$row["u_name"].'</br>'.$row["q_date"].'</br>'.$row["sub_name"].'</h5>'.'</td>'.'</tr>' ;

						   			}	

						  ?>
						   		</div>
						   	<!-- end  question-->

						   	<hr>
						   	<!--start answer-->
						   		<div class="row">
						   	<?php

						   	$obj=new database();
							  	$res=$obj->displaya($q_id);
							  	$cnt=mysql_num_rows($res);
							  	$_SESSION["q_id"]=$q_id;
							  	echo '<h3 style="margin-left:2%;">'.$cnt."Answers".'</h3>'.'<hr>';
							  	while ($row=mysql_fetch_assoc($res))
							  	 {

							  	 	echo "<tr>";
							  	 	echo '<td>'.'<h4 style="margin-left: 5%;">'.$row["ans_des"].'</h4>'.'<h5 align="left" style="margin-left: 80%;">'.'</br>'."Answered By:".$row["u_name"].'</br>'."Date:".$row["ans_date"].'</h5>'.'</td>'.'<hr>';
							  	 	echo "</tr>";
							  	 }


?>
<form action="addans.php" method="post">
 
											 			<div id="sample" margin-left: 10px;>
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      //]]>
      </script>
      <h4 style="margin-left:2%;">
        Your Answer:
      </h4>
      <textarea name="area1" style="margin-left:10%;width:820px;">
    
    
      </textarea></br>
      <center><button style="margin-right:10%;width:90px" type="submit" align="center" name="btnpost" class="btn btn-primary">Post</button></center>
    </div>
       
	</form>
						   		</div>
						   	<!--end ans-->

						  </div>
						</div>


		</div>
		<div class="col-md-3 col-sm-3 col-xs-3">
 	<?php	include 'sidebar.php'; ?>
 	</div>

</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
 	<?php	include 'footer.php'; ?>
 	</div>
</div>
 </body>
 </html>  