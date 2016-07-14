<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="../css/endless.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/jquery-1.10.2.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
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
</head>

<body class="container">
<center>
<form action="queapprove.php" method="post">
<table class="table" id="dataTable"> 
<thead>   
<div class="row">

<?php include 'a_header.php'; ?>

</div>
  <!-- Table -->  
<div class="panel panel-default">

<div class="panel-heading"><h2>Display Questions</h2></div>

<div class="row">
<div class="col-md-offset-2 col-md-9">

<tr>
<th>q_id</th>
<th>q_title</th>
<th>q_des</th>
<th>q_date</th>


</tr>
</thead>
<tbody>
<?php
		$email=$_SESSION["email_id"];
		$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from question_tbl",$con);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		$q_id=$row["q_id"];
		$q_title=$row["q_title"];
		$q_desc=$row["q_des"];
		$q_date=$row["q_date"];		
		}
	
?>

 
  <?php
	$con=mysql_connect('localhost','root','');
		mysql_select_db('tech_ques',$con);
		$res=mysql_query("select * from question_tbl ",$con);
		while($row=mysql_fetch_assoc($res))
		{
		echo '<tr>';
		echo '<td>'.$row["q_id"].'</td>';
		echo '<td><a href="#">'.$row["q_title"].'</a></td>';
		echo '<td>'.$row["q_des"].'</td>';
		echo '<td>'.$row["q_date"].'</td>';
		//echo '<td><a href="pro_update1.php?id='.$row["pro_id"].'">update</a></td>';
		//echo '<td><a href="pro_delete.php?id='.$row["pro_id"].'">delete</a></td>';
		echo '</tr>';
			}
?>

</div>
</div>
</div>
</tbody>
 </table>
</div>
</form>
</body>
</html>

	