<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link href="../Content/bootstrap.min.css" rel="stylesheet" />
   <script src="../Scripts/jquery-1.9.1.min.js"></script>
    <script src="../Scripts/bootstrap.min.js"></script>
<title>
Update
</title>
</head>

<body class="container">

<?php include 'a_header.php'; ?>

<center>
<h1>Update Categories</h1>
<form action="update1.php" method="post">




<?php
		$id=$_REQUEST["id"];
		
		require  '../database.php';
		$obj=new database();
		$res=$obj->getdata4($id);
		
		while($row=mysql_fetch_assoc($res))
		{
			$name=$row["sub_name"];
			$sid=$row["sub_id"];
			//$_SESSION["sub_id"]=$sub_id;
		}
		
?>




<tr>
<td>Sub_Id</td>
<td><input type="text" name="txtid"  readonly value="<?php echo $sid ; ?>"></td>
</tr>

<tr>
<td>Sub_Name</td>
<td><input type="text" name="txtcatname" value="<?php echo $name ; ?>"></td>
</tr>
<br><br>
<tr>
<td><button type="submit" class="btn btn-info" name="btnupdate" value="Update">Update</button/>
<button  class="btn btn-info" type="reset" name="btnclear" value="Clear">Clear</button></td>
</tr>


</form>
</body>
</html>
