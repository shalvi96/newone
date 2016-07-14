<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <link href="../Content/bootstrap.min.css" rel="stylesheet" />
   <script src="../Scripts/jquery-1.9.1.min.js"></script>
    <script src="../Scripts/bootstrap.min.js"></script>
    
</head>
<body class="container">
<?php
	if(isset($_POST["login"]))
	{
	//$_SESSION["email_id"]=$email;
	$email=$_POST["txtemailid"];
	$pass=$_POST["txtpassword"];
	$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
	$res=mysql_query("select * from user_tbl where email_id='$email' and u_pwd='$pass'",$con);
	$con=mysql_num_rows($res);
	if($con==1)
	{
		$_SESSION["email_id"]=$email;
		header('location:needtoapprove.php');
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Techno_Question</a>
    </div>

      <form class="navbar-form navbar-right" action="header.php" method="post" role="search">
       <div class="form-group">
          <input type="text" class="form-control" name="txtemailid" placeholder="Enter Email_id">
		    <input type="password" class="form-control" name="txtpassword" placeholder="Enter Password">
        </div>
        <button type="submit" name="login" class="btn btn-default">login</button>
      </form>
      <!--<ul class="nav navbar-nav navbar-right">
	  
	    
      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	
</body>
</html>