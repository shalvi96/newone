<?php
session_start();
$id=$_REQUEST["id"];
?>
<!DOCTYPE html>
<html>
<head>
<style>
.hr
{
	border-style:solid;
	border-top-width:1px;
	border-color:gray;
}
</style>
    <link href="../Content/bootstrap.min.css" rel="stylesheet" />
   <script src="../Scripts/jquery-1.9.1.min.js"></script>
   <script src="../Scripts/bootstrap.min.js"></script>

</head>

<body class="container">

<div class="row">
<?php include 'a_header.php'; ?>
</div>
 

<div class="panel panel-primary">
<!-- Default panel contents -->
<div class="panel-heading"><h5 align="left">Question:</h5></div>
</div>

<?php
		
		$email=$_SESSION["email_id"];
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from question_tbl",$con);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		$q_id=$row["q_id"];
		$q_desc=$row["q_des"];
		$q_date=$row["q_date"];		
		}
	
?>

<table class="table"> 
  <?php
	
	$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select q.*,u.*,s.* from question_tbl as q,user_tbl as u,subject_tbl as s where q.fk_sub_id=s.sub_id and q.fk_email_id=u.email_id and q_id='$id'",$con);
		
		while($row=mysql_fetch_assoc($res))
		{
			
echo '<tr>'.'<td>'.'<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="panel-body">
								 	
'.'<h4>'.$row["q_des"].'</h4>'.'
<h5 align="left" style="margin-left: 75%;">'.$row["u_name"].'
</br>'.$row["q_date"].'</br>'.$row["sub_name"].'</h5>
</div>
</div>
</div>'.'</td>'.'</tr>
';
}

?>
</table><hr class=hr>

 <?php
		
		$email=$_SESSION["email_id"];
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from answer_tbl",$con);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		
		$ans_desc=$row["ans_des"];
		$ans_date=$row["ans_date"];		
		}
	
?>

  <!-- Table -->
  <table class="table">

  <?php
		require  'database.php';
		$obj=new database();
		$res=$obj->answer($id);
	$cnt=mysql_num_rows($res);
	echo '<h4 align="left">'.$cnt.':'."Answers".'</h4>';
echo '<hr class=hr>';
	while($row=mysql_fetch_assoc($res))
		{
echo '<tr>'.'<td>'.'<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">'.'
<h4>'.$row["ans_des"].'</h4>'.'
<h5 align="left" style="margin-left: 75%;">'.$row["u_name"].'
</br>'.$row["ans_date"].'</h5>'.'</td>'.'</tr>


</div>
</div>';
			}
?>
	
</table>
</div>


<form action="adminaddans.php?id1=<?php echo $id; ?>" method="post">
 <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<div id="sample">
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js">
	  </script> <script type="text/javascript">
    //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      //]]>
      </script>
      <h2>
        Your Answer:
      </h2>
      <textarea name="area" cols="133"> </textarea>
	  <button type="submit" name="btnpost" class="btn btn-primary">
	 post
	</button>
    </div>
    </div>
    </div>
 </form>
</body>
</html>

