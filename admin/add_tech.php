<!DOCTYPE html>
<html>
<head>
	
	
<link href="../Content/bootstrap.min.css" rel="stylesheet" />
    <script src="../Scripts/jquery-1.9.1.min.js"></script>
    <script src="../Scripts/bootstrap.min.js"></script>

         <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src='../js/jquery.dataTables.min.js'></script>
</head>

<body class="container">
<?php include 'a_header.php'; ?>
<center>
<?php
	if(isset($_POST["btnins"]))
	{
		$name=$_POST["txtcatname"];
		require  '../database.php';
		$obj=new database();
		$res=$obj->getdata1($name);
		echo $res;
		if($res==1)
		{
			header('location:subject.php');
		}
		else
		{
			echo "Not successful";
		}
	}

?>

<form action="add_tech.php" method="post">

<table class="table">
   
   <div class="row">
<div class="col-md-offset-2 col-md-9">

</div>
</div>



  <div class="panel-heading"><h2>insert Subject</h2></div>
  
  

<div class="row">
<div class="col-md-offset-2 col-md-9">
<tr>
<td>Sub_Name</td>
<td><input type="text" name="txtcatname"></td>
</tr>
</div>
</div>


<div class="row">
<div class="col-md-offset-2 col-md-9">
<tr>
<td  colspan="2" align="center"><a href="updateapproval.php?id='.$row['q_id'].'">
<button type="submit" name="btnins" class="btn btn-success">
<span class="glyphicon glyphicon-pencil
" aria-hidden="true"></span></button></a>
<a href="quedel.php?id='.$row['q_id'].'">
<button type="submit" name="btnclear" class="btn btn-danger">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></td>


<!--<td colspan="2" align="center"><input type="submit" name="btnins" value="insert" class="btn btn-info">
<input type="reset" name="btnclear" value="clear" class="btn btn-info"></td>-->
</tr>
</div>
</div>

</div>
</table>
</form>
</body>
</html>
