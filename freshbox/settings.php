<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="Food!" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=0.8"
    name="viewport">

    <title>Garden Fresh Box Wireframe</title>
    <link href="gfb.css" rel="stylesheet" type="text/css">
    <link href="/favicon.ico" rel="icon" type="image/x-icon">
    <link href=
    'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic|Oswald:400,700,300'
    rel='stylesheet' type='text/css'>
    <style type="text/css">
</style>
    <script src="http://code.jquery.com/jquery-1.6.min.js" type=
    "text/javascript"></script>
</head><?php include('menus.php'); ?>

<body>
    <?php menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Account Settings</p>
                    </div><a class="RO textTitle padTop" href="changepass.php"
                    style=
                    "display:block;margin-left:70px;color:darkgreen;float:none;">Change
                    Password</a> <a class="RO textTitle padTop" href=
                    "editinfo.php" style=
                    "display:block;margin-left:70px;color:darkgreen;float:none;">
                    Edit Account Information</a> <?php 
                                            if(isset($_SESSION['host'])){

                                         ?> <a class="RO textTitle padTop"
                    href="edithost.php" style=
                    "display:block;margin-left:70px;color:darkgreen;float:none;">
                    Edit Host Site Information</a> <?php  }

                                         ?>
                </div>
            </div>
        </div>
    </div><!-- wrapper end -->
    <?php footer(); ?>
</body>
</html>