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
    <script type="text/javascript">
$(function(){
    $('#mylink').click(function(){ 
        $.ajax({ url: 'menus.php',
         data: {action: 'signInUser'},
         type: 'post'
        });
    });

    });
    $(document).ready(function() {



    $('input[name="email"]').focus(function() {
    if  ($('input[name="email"]').attr('value') == 'Email'){
        $('input[name="email"]').css('color', 'black');
        $('input[name="email"]').val('');
    }
    });


    $('input[name="password"]').focus(function() {
    if  ($('input[name="password"]').attr('value') == 'Password'){
        $('input[name="password"]').css('color', 'black');
        $('input[name="password"]').val('');
    }
    });


    });


    </script>
</head><?php include('menus.php'); ?>

<body>
    <?php menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <img src="login.png" style=
                        "display:block;margin-left:auto;margin-right:auto;"
                        width="">

                        <p class="textTitle" style=
                        "float:none;text-align:center;margin-top:-30px;">Sign
                        In</p>
                    </div>

                    <form class="centeredBlock padTopBot">
                        <label><input id="email" name="email" style=
                        "color:lightgray;" type="text" value="Email"></label>
                        <label><input id="pass" name="password" onfocus=
                        "this.type='password'" style="color:lightgray;" type=
                        "text" value="Password"></label>
                    </form><a class=" centeredBlock submit" href=
                    "menus.php?signin=user" id="submit" name="submit">
                    <p class="textTitle" style=
                    "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;">
                    Submit</p></a>

                    <div class="padTopBot">
                        <a class="centeredBlock" href="menus.php?signin=host">
                        <p class="textTitle" style=
                        "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:14px;opacity:0.4;">
                        (Click here to sign in as a Host Site
                        Coordinator)</p></a>
                    </div>

                    <div class="padTopBot">
                        <div style="float:right;">
                            <a class="textTitle RO" href="recovery.php" style=
                            "float:none;text-align:center;font-size:18px;font-weight:400;">
                            Forgot Password?</a>
                        </div>

                        <div style="float:left">
                            <a class="textTitle RO" href="create.php" style=
                            "float:none;text-align:center;font-size:18px;font-weight:400;">
                            Create Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- wrapper end -->
    <?php footer(); ?>
</body>
</html>
