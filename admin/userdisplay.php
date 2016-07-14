<!DOCTYPE html>
<html>
<head>

<link href="../Content/bootstrap.min.css" rel="stylesheet" />
    <script src="../Scripts/jquery-1.9.1.min.js"></script>
    <script src="../Scripts/bootstrap.min.js"></script>

<title>
Subject
</title>
</head>

<body>

<?php include 'a_header.php'; ?>

<center>

<table class="table">
    
  <!-- Table -->
  

  <!-- Default panel contents -->
<div class="panel-heading"><h2>Stock On Hand</h2></div>


<tr>
<th>Sub_Id</th>
<th>Sub_Name</th>
<th>Action</th>

</tr>
<?php
		require '../database.php';
		$obj=new database();
		$res=$obj->getdata();
		
		while($row=mysql_fetch_assoc($res))
		{
		echo '<tr>';
		echo '<td>'.$row["sub_id"].'</td>';
		echo '<td>'.$row["sub_name"].'</td>';
		echo '<td><a href="update.php?id='.$row["sub_id"].'" class="btn btn-info">Edit</a></td>';
		echo '<td><a href="cat_delete.php?id='.$row["sub_id"].'" class="btn btn-info">Delete</a></td>';
		echo '</tr>';
		}
?>
</div>
</div>
</table>

</center>
</body>
</html>
