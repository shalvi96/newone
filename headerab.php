<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
   <link href="Content/bootstrap.min.css" rel="stylesheet" />
   <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    
</head>
<body>
<?php
	if(isset($_POST["login"]))
	{
	$eid=$_POST["txtemailid"];
	$pass=$_POST["txtpassword"];
	$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
	$res=mysql_query("select * from user_tbl where email_id='$eid' and u_pwd='$pass'",$con);
	$cnt=mysql_num_rows($res);
  while ($row=mysql_fetch_assoc($res)) {

    $type=$row["type"];
  }
	if($cnt==1)
	{

		//echo "Successful";
    $_SESSION["email_id"]=$eid;
    if($type=='user')
    {
      header('location:user/questdisplay.php');
    }
    else
    {
      //echo "admin";
      header('location:admin/needtoapprove.php');
    }
   
	}
	else
	{
		echo "Unsuccessful";
	}
	}
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

    <img src="images/logo.jpg" style="height:50px;width:50px" />
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">TECHQUEST.com</a>
    </div>

      <form class="navbar-form navbar-right" action="mainheader.php" method="post" role="search">
       <div class="form-group">
          <input type="text" class="form-control" required name="txtemailid" placeholder="Enter Email_id">
		    <input type="password" class="form-control"  required name="txtpassword" placeholder="Enter Password">
        </div>
        <button type="submit" name="login" class="btn btn-default">login</button>
      </form>
      
	      
            <form action="signup.php" method="post">
    <div align="right" class="container">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-inverse btn-lg" data-toggle="modal" data-target="#myModal">
  Sign Up
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" align="center" id="myModalLabel">SIGN UP FORM</h4>
      </div>
      <div class="modal-body">
      <h6 align="left">Email-id</h6>
        <div class="input-group">
             <input type="text" class="form-control" name="txtemail" placeholder="Recipient's Email-Id" aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2">@example.com</span>
            </div>
           <h6 align="left">User Name</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                 <input type="text" class="form-control" name="txtname" placeholder="Username" aria-describedby="basic-addon1">
            </div>
            <h6 align="left">Password</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                 <input type="password" class="form-control" name="txtpass" placeholder="Password" aria-describedby="basic-addon1">
            </div>
            <h6 align="left">Confirm Password</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">*</span>
                 <input type="password" class="form-control" name="txtpass1" placeholder="Confirm Password" aria-describedby="basic-addon1">
            </div>
            <h6 align="left">Mobile No</h6>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">+91</span>
                 <input type="text" class="form-control" name="txtmob" placeholder="Mobile No" aria-describedby="basic-addon1">
            </div>
            </br>
            <div class="input-group">
                             <span class="input-group-addon" id="basic-addon1">Image</span>
                               <input type="file" name="txtimg" class="form-control" placeholder="Enter Old Password" aria-describedby="basic-addon1"></input>
                                   
                         </div>     </br>

            </div>

                            <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Gender  </span>
                            <tr>
                            
                              <td><input type="radio" name="txtgen"  checked value="male">Male
                              <input type="radio" name="txtgen" value="female">Female</td>

                          </tr>
                            </div>

            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>>
        <input type="submit" name="btnsub" class="btn btn-primary" value="Save">Save</input>
      </div>
    </div>
  </div>
</div>
</div>
    </form>
</body>
</html>