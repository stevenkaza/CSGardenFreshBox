<!DOCTYPE html>
<html>
<head>
    <meta content="Food!" name="description">

    <title>Garden Fresh Box Wireframe</title>
    <?php include('menus.php'); ?>
</head>

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
