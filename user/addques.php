<?php

		session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>addques</title>
	 
</head>
<body class="container">
 <div class="row">
 	<div class="col-md-12 col-sm-12">
 	<?php	include '/user_header.php'; ?>
 	</div>
 </div> 


<form action="addq.php" method="post">
 <div class="row">
			<div class="col-md-9 col-sm-9">

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 align="center"><class="panel-title">Add Your Question Here</h3>
  </div>
  <div class="panel-body">
 
                      <div class="input-group">
                                    <span class="input-group-addon" id="Span1">Subject  </span>
                                    <select name="txtsub">

                          <?php

                          require '../database.php';
                    $con=mysql_connect('localhost','root','');
                    mysql_select_db('tech_ques',$con);
                    $res=mysql_query("select * from subject_tbl",$con);
                    while($row=mysql_fetch_array($res,MYSQL_ASSOC))
                    {
                      $sub_name=$row["sub_name"];
                      $sub_id=$row["sub_id"];
                      echo'<option value="'.$sub_id.'">'.$sub_name.'</option>';
                    }
                  
                

 ?>      
                      </select>
                      
                      
                      </div>
                  

			<div class="input-group">
  <span class="input-group-addon"  id="basic-addon1">Question Title</span>
  <input type="text" name="txttitle" required class="form-control" placeholder="Title" aria-describedby="basic-addon1">
</div>

											 			<div id="sample">
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      //]]>
      </script>
      <h4>
        Add a Question:
      </h4>
      <textarea name="areaq"  cols="100" style="width:647px;height:250px;" required>
    
    
      </textarea>
    </div>
    </div>
    </div>
<center><button type="submit"  name="btnpost" class="btn btn-primary">Post</button></center>
 </form>

    </div>
<div class="col-md-3 col-sm-3 col-xs-3">
    <?php include 'sidebar.php'; ?>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <?php include 'footer.php'; ?>
</div>
</body>
</html>