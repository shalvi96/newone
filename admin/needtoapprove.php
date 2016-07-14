<?php 
session_start();
?>
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
<center>
<form action="needtoapprove.php" method="post">
<div class="row">
<?php include 'a_header.php'; ?>
</div>

<h1>Needs to approve</h1>
<table class="table"  id="dataTable">
<thead>
<div class="container">
<div class="row">
<div class="col-md-12 col-sd-12">

<tr>
<th><h4>Question title</h4></th>
<th><h4>Question date</h4></th>
<th><h4> Action</h4></th>
</tr>
</thead>
<tbody>
<?php
			$email=$_SESSION["email_id"];
			require 'database.php';
			$obj=new database();
			$res=$obj->needapp($email);
						
		while($row=mysql_fetch_assoc($res))
		{
		echo '<tr>';
		//echo '<td>'.$row["q_id"].'</td>';
		echo '<td><a href="quedetail1.php?id='.$row["q_id"].'">'.$row["q_title"].'</a></td>';
		//echo '<td>'.$row["q_des"].'</td>';
		echo '<td>'.$row["q_date"].'</td>';
		//echo '<td>'.$row["q_flag"].'</td>';
									

echo '<td>'.'<a href="approval.php?id='.$row["q_id"].'" >'.'

<span class="glyphicon glyphicon-ok btn btn-success" aria-hidden="true"></span>'.'</a>';
echo '<a href="quedel.php?id='.$row["q_id"].'" onClick="return del()">'.'

<span class="glyphicon glyphicon-remove btn btn-danger" aria-hidden="true"></span>'.'</a>'.'</td>';

	//	echo '<td><a href="quedel.php?id='.$row["q_id"].'">Delete</a>';
	//	echo '<a href="approval.php?id='.$row["q_id"].'">Approve</a></td>';
		echo '</tr>';
			}
?>

</tbody>
</table>

</div>
</div>
</div>
</form>
</body>
</html>
