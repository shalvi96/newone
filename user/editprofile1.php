
<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
td
{
	height:100%;
}
.c
{
	background-color:aqua;
}

</style>
	
</head>


<?php 
			$eid=$_SESSION["email_id"];
			$con=mysql_connect('localhost','root','');
			mysql_select_db('tech_ques',$con);
			$res=mysql_query("select * from user_tbl where email_id='$eid'",$con);
 			while($row=mysql_fetch_array($res,MYSQL_ASSOC))
			{
				$name=$row["u_name"];
				$mob=$row["u_mob"];
				$gen=$row["u_gender"];

				
			}
	
?>

<body class="container">


<div class="row">
	<div class="col-md-12 col-sm-12">
			<?php	include '/user_header.php'; ?>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12">
	
<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><class="panel-title">Edit Profile</h2>
  </div>
  <div class="panel-body">
  
<form action="x.php" method="post">
			<div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Email-Id</span>
				                       <input type="text" readonly name="txtemail" value="<?php echo $eid;?>" class="form-control" placeholder="Enter Email-Id" aria-describedby="basic-addon1">
				                           
				                 </div>    
				                         </br>
				                            
				                        <div class="input-group">
				                            <span class="input-group-addon" id="Span1">Name</span>
				                             <input type="text" name="txtname" value="<?php echo $name;?>" class="form-control" placeholder="Enter Name" aria-describedby="basic-addon1">
				                        </div>
				                        </br>
				                            
				                        <div class="input-group">
				                            <span class="input-group-addon" id="Span1">Mobile Number</span>
				                             <input type="text" name="txtmob" value="<?php echo $mob;?>" class="form-control" placeholder="Enter Mobile Number" aria-describedby="basic-addon1">
				                        </div>
				                        </br>
				                       
										<div class="input-group">

												<tr>
													<span class="input-group-addon" id="Span1">Gender    </span>
													<td><input type="radio" name="txtgen" value="male" <?php if($gen=="male") {echo 'checked';} ?>>Male
													<input type="radio" name="txtgen" value="female" <?php if($gen=="female") {echo 'checked';} ?>>Female</td>
												</tr>
												</div>
												<center><div>
												<button type="submit" name="btnsub" class="btn btn-primary">UPDATE</button>
												</div></center>

</div>
</div>
	</div>
</div>


</table>

</form>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
 	<?php	include 'footer.php'; ?>
 	</div>
</div>
</body>
</html>