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
      
	      
            <form action="signup.php"  enctype="multipart/form-data" method="post">
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
             <h6 align="left">Image</h6>
        <div class="input-group">
             <input type="file" class="form-control" name="fileToUpload" aria-describedby="basic-addon2">
                 <span class="input-group-addon" id="basic-addon2"/>Image</span>
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
	   
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
<div class="col-md-6 col-sm-6">
  <p>
    <div class="span6">
                <h3>Why Choose Us?</h3>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
            </div>
  </p>
</div>
      <div class="col-md-6 col-sm-6">
              
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img src="images/i1c.jpg" style="height:400px; width:100%;" alt="...">
                            <div class="carousel-caption">
                              ...
                            </div>
                          </div>


                          <div class="item">
                            <img src="images/i2.jpg" style="height:400px; width:100%;" alt="...">
                            <div class="carousel-caption">
                              ...
                            </div>
                          </div>
                            <div class="item">
                            <img src="images/i3.jpg" style="height:400px; width:100%;" alt="...">
                            <div class="carousel-caption">
                              ...
                            </div>
                            </div>
                            <div class="item">
                            <img src="images/i4.png" style="height:400px; width:100%;" alt="...">
                            <div class="carousel-caption">
                              ...
                            </div>
                          </div>
                          </div>
                          ...
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

      </div>
</div>

<div class="row">
      
      <div class="col-md-12 col-sm-12">
        <?php include 'footer.php'; ?>
      </div>

</div>

	
</body>
</html>