<?php
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>

<body>
<form action="editp.php" method="post"></form>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<?php include '/user_header.php'; ?>
		</div>
	</div>
	<?php
	$q_id=$_REQUEST["q_id"];
	$eid=$_SESSION["email_id"];
	//echo $eid;
	//echo $q_id;
	require '../database.php';
	$obj=new database();
	$res=$obj->editpost($q_id);
	while ($row=mysql_fetch_assoc($res))
	{
	 		$title=$row["q_title"];
	 		$des=$row["q_des"];
	 		$sub=$row["sub_name"];	
	 		$q_id=$row["q_id"];
	}
	 $_SESSION["q_id"]=$q_id;

?>
<div class="row">
	<div class="col-md-12 col-sm-12">
	
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 align="center"><class="panel-title">Edit Profile</h3>
  </div>
  <div class="panel-body">
  
<form action="y.php" method="post">
			<div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Question Title</span>
				                       <input type="text" requried name="txttitle" value="<?php echo $title;?>" class="form-control" placeholder="Enter Email-Id" aria-describedby="basic-addon1">
				                           
				                 </div>

				                         </br>
				                          <div class="input-group">
                                    <span class="input-group-addon" id="Span1">Subject  </span>
                                    <select name="txtsub">

                          <?php


                    $con=mysql_connect('localhost','root','');
                    mysql_select_db('tech_ques',$con);
                    $res=mysql_query("select q.*,s.* from question_tbl as q,subject_tbl as s where q.fk_sub_id=s.sub_id",$con);
                    while($row=mysql_fetch_array($res,MYSQL_ASSOC))
                    {
                     /* $sub_name=$row["sub_name"];
                      $sub_id=$row["sub_id"];
                      echo'<option value="'.$sub_id.'">'.$sub_name.'</option>';*/
                      echo '<option value="'.$row["sub_id"].'"';
										if($row["sub_id"]==$q_id)
										echo 'selected';
										echo '>'.$row["sub_name"].'</option>';
                    }
                  
                

 ?>      
                      </select>
                      
                      
                      </div></br>
								 			<div id="sample">
										      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
										    //<![CDATA[
										            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
										      //]]>
										      </script>
										      
										        
										      <span class="input-group-addon" style="width: unset;" id="basic-addon1">Question Description</span>
										      <textarea name="areaedit"  cols="100" style="width:647px;height:250px;" value="<?php  echo $des;?>" required>
										    
										    
										    
				                            
				                       
				                     <?php  echo $des;?>
				                       </textarea>
										    </div>
				                        </br>
												<center><div>
												<button type="submit" name="btnsub" class="btn btn-info">UPDATE</button>
												</div></center>

</div>
</div>
	</div>
</div>

</form>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
 	<?php	include 'footer.php'; ?>
 	</div>
</div>
</body>
</html>
