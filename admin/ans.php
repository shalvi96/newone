<?php
session_start();
?>
<html>
<head>
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
   <script src="../Scripts/jquery-1.9.1.min.js"></script>
   <script src="../Scripts/bootstrap.min.js"></script>

</head>

<body>

<form action="adminaddans.php" method="post">
 <div class="row">
			<div class="col-md-12 col-sm-12">

<div id="sample">
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      //]]>
      </script>
      <h2>
        Your Answer:
      </h2>
      <textarea name="area1"  cols="133">
    
    
      </textarea><button type="submit" name="btnpost" class="btn btn-primary">
	  Post </button>
    </div>
    </div>
    
 </form>

   
</body>
</html>