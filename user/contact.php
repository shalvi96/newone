<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Contact Us | Nova</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

    <div class="row">
    <div class="col-md-12 col-sm-12">
         <?php include 'headerab.php'; ?>
    </div>
</div>

    
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>
                <i class="icon-map-marker pull-left"></i> 108 Arohi Complex, Vijay Cross Road<br>
                Ahmedabad India
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;qusans@gmail.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+91 9898982626
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.techquest.com
            </p>
        </div>

  
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
             <?php include 'footer.php'; ?>
        </div>
    </div>

</section>



<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>   

</body>
</html>
