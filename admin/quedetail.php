<?php
session_start();
$id=$_REQUEST["id"];
?>
<!DOCTYPE html>
<html>
<head>
    <link href="../Content/bootstrap.min.css" rel="stylesheet" />
   <script src="../Scripts/jquery-1.9.1.min.js"></script>
   <script src="../Scripts/bootstrap.min.js"></script>

</head>

<body class="container">
<center>

<table class="table">   
<div class="row">
<?php include 'a_header.php'; ?>
</div>
  <!-- Table -->  
<div class="row">
<div class=" col-md-12">
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

 
  <?php
	
	$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from question_tbl where q_id='$id'",$con);
		while($row=mysql_fetch_assoc($res))
		{
			
echo '<div class="row">
<div class="col-md-12 col-sm-12">
											 	
<div class="panel panel-primary">
<!-- Default panel contents -->
<div class="panel-heading">Question:</div>
											  

<!-- List group -->
<ul class="list-group">
<li class="list-group-item">'.'<h4>'.$row["q_des"].'</h4>'.'
<h5 align="left" style="margin-left: 75%;">'.'</br>'."email_id:".$row["fk_email_id"].'
</br>'."Date:".$row["q_date"].'</h5>'.'</td>
</ul>
</div>
</div>
</div>';
		/*echo '<tr>';
		echo '<td>'.$row["q_id"].'</td>';
		//echo '<td><a href="#">'.$row["q_title"].'</a></td>';
		echo '<td>'.$row["q_des"].'</td>';
		echo '<td>'.$row["q_date"].'</td>';
		//echo '<td><a href="pro_update1.php?id='.$row["pro_id"].'">update</a></td>';
		//echo '<td><a href="pro_delete.php?id='.$row["pro_id"].'">delete</a></td>';
		echo '</tr>';*/
			}
?>

</div>
</div>


<div class="row">
<div class="col-md-12">
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

 
  <?php
		require  'database.php';
		$obj=new database();
		$res=$obj->answer($id);
	$cnt=mysql_num_rows($res);
	echo '<h3>'.$cnt."Answers".'</h3>';
	echo '<div class="panel panel-primary">
<!-- Default panel contents -->
<div class="panel-heading">Answer:</div>';

	while($row=mysql_fetch_assoc($res))
		{
echo '<div class="row">
<div class="col-md-12 col-sm-12">
																					  

<!-- List group -->
<ul class="list-group">
<li class="list-group-item">'.'
<h4>'.$row["ans_des"].'</h4>'.'
<h5 align="left" style="margin-left: 75%;">'.'</br>'."email_id:".$row["fk_email_id"].'
</br>'."Date:".$row["ans_date"].'</h5>'.'</td>
</ul>

</div>
</div>';
	/*	echo '<tr>';
		echo '<td>'.$row["q_id"].'</td>';
		//echo '<td><a href="#">'.$row["q_title"].'</a></td>';
		echo '<td>'.$row["q_des"].'</td>';
		echo '<td>'.$row["q_date"].'</td>';
		//echo '<td><a href="pro_update1.php?id='.$row["pro_id"].'">update</a></td>';
		//echo '<td><a href="pro_delete.php?id='.$row["pro_id"].'">delete</a></td>';
		echo '</tr>';*/
			}
?>
</div>		
</div>
</div>

<form action="adminaddans.php?id1=<?php echo $id; ?>" method="post">
 <div class="row">
<div class="col-md-12 col-sm-12">

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

 </table>
</body>
</html>

