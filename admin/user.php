<!DOCTYPE html>
<html>
<head>

<link href="../Content/bootstrap.min.css" rel="stylesheet">
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

	</head>
<body class="container">
<form action="delu.php" method="post">


<div class="row">
<?php include 'a_header.php'; ?>
</div>
<center>
<h1>User</h1>
</center>
<table class="table" id="dataTable">
<thead>
<tr>
<th><input type="checkbox" style="opacity:1;" name="chkhead"/></th>
<th><h4>User Id</h4></th>
<th><h4>User Name</h4></th>
<th><h4>Gender</h4></th>
<th><h4>Mobile</h4></th>
<th><h4>Action</h4></th>
</tr>
</thead>

<tbody>

<?php
		require 'database.php';
		$obj=new database();
		$res=$obj->getdata7();
		//echo $res;
		while($row=mysql_fetch_assoc($res))
		{

		echo '<tr>';
		echo '<td><input type="checkbox" style="opacity:1;" name="chk[]" value='.$row["email_id"].'></td>';
		echo '<td>'.$row["email_id"].'</td>';
	    echo '<td>'.$row["u_name"].'</td>';
		echo '<td>'.$row["u_gender"].'</td>';
		echo '<td>'.$row["u_mob"].'</td>';
		
		
		//echo '<td><img src='.$row["u_img"].' height="20%"  width="20%"></td>';
		echo '<td>'.'<a href="del.php?id='.$row["email_id"].'" onClick="return del()">'.'
<button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-remove" aria-hidden="true">
</span></button>'.'</a>'.'</td>';

	//	echo '<td><a href="del_user.php?id='.$row["email_id"].'" class="btn btn-info">Delete</a></td>';		
		echo '</tr>';
		
		}
?>
</tbody>
</table>
<button type="submit"  class="btn btn-danger">Delete All</button>
</form>
</body>
</html>
