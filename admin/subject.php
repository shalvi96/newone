<!DOCTYPE html>
<html>

<head><link href="../Content/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
  	<script src="../Scripts/bootstrap.min.js"></script>
  	<script src='../js/jquery.dataTables.min.js'></script>

    <script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>

     	<script>
     		function del()
     		{
     			return confirm("Are You Sure You Want To Delete?");
     		}
     </script>

<title>
Subject
</title>
</head>

<body class="container">

<?php include 'a_header.php'; ?>

<center>
<form action="muldeluser.php" method="post">
<table class="table" id="dataTable">
    
  <!-- Table -->
  
<thead>
  <!-- Default panel contents -->
<div class="panel-heading"><h2>Subjects</h2></div>
<tr>
<th><input type="checkbox" style="opacity:1;" name="chkhead"/></th>
<th><h4>Subject Name</h4></th>
<th><h4>Action</h4></th>
</tr>
</thead>
<tbody>

<h4 align="right"><a href="add_tech.php?id='.$row['sub_id'].'">
<button type="submit" class="btn btn-success">
<span class="glyphicon glyphicon-plus
" aria-hidden="true"></span></button></a></h4>



<?php
		require '../database.php';
		$obj=new database();
		$res=$obj->getdata();
		
		while($row=mysql_fetch_assoc($res))
		{
		echo '<tr>';
		//echo '<td>'.$row["sub_id"].'</td>';
    echo '<td><input type="checkbox" style="opacity:1;" name="chk[]" value='.$row["sub_id"].'></td>';
		echo '<td>'.$row["sub_name"].'</td>';
		echo '<td>'.'<a href="update.php?id='.$row["sub_id"].'">'.'
<button type="submit" class="btn btn-success">
<span class="glyphicon glyphicon-pencil
" aria-hidden="true"></span></button>'.'</a>';
echo '<a href="delete.php?id='.$row["sub_id"].'"  onClick="return del()">'.'
<button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-remove" aria-hidden="true">
</span></button>'.'</a>'.'</td>';

		//echo '<td><a href="update.php?id='.$row["sub_id"].'" class="btn btn-info">Edit</td>';
		//echo '<td><a href="delete.php?id='.$row["sub_id"].'" class="btn btn-info">Delete</a></td>';
		echo '</tr>';
		}
?>
</tbody>
</table>
<button type="submit"  class="btn btn-danger">Delete All</button>
</form>
</center>
</body>
</html>
