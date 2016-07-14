<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>




<body class="container">
<form method="post" action="changepass2.php">


<div class="row">
	<div class="col-md-12 col-sm-12">
			<?php	include '/user_header.php'; ?>
	</div>
</div>

<div class="row">
	<div class="col-md-12 col-sm-12">
	
<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><class="panel-title">Change Password</h2>
  </div>
  <div class="panel-body">
  

								<div class="input-group">
				                     <span class="input-group-addon" id="basic-addon1">Old Password</span>
				                       <input type="password"  name="txtpasso" class="form-control" placeholder="Enter Old Password" aria-describedby="basic-addon1">
				                           
				                 </div>    
				                         </br>
				                            
				                        <div class="input-group">
				                            <span class="input-group-addon" id="Span1">New Password</span>
				                             <input type="password" name="txtpass1" class="form-control" placeholder="Enter New Password" aria-describedby="basic-addon1">
				                        </div>
				                        </br>
				                            
				                        <div class="input-group">
				                            <span class="input-group-addon" id="Span1">Re-enter New Password</span>
				                             <input type="password" name="txtpass2" class="form-control" placeholder="Re-Enter New Password" aria-describedby="basic-addon1">
				                        </div>
				                        </br>
				                       
				                        <center><button  type="submit" class="btn btn-primary">Change Password</button></center>
</form>
</div></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
 	<?php	include 'footer.php'; ?>
 	</div>
</div>
</body>
</html>