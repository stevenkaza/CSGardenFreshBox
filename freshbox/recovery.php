<!DOCTYPE html>
<html>
<head>
    <meta content="Food!" name="description">

    <title>Garden Fresh Box Wireframe</title>
<?php include('menus.php'); ?>
    <script type="text/javascript">
$(document).ready(function() {



    $('input[name="email"]').focus(function() {
    if  ($('input[name="email"]').attr('value') == 'Email'){
        $('input[name="email"]').css('color', 'black');
        $('input[name="email"]').val('');
    }
    });



    });

    function messageGood() {
    document.getElementById("message").innerHTML = '<p class="textTitle" id=message style=margin-top:20px;height:50px;float:center;text-align:center;font-weight:400;font-size:18px;> An email has been sent. <\/p>      <a href=aXbes.php  class=centeredBlock > <p class=textTitle style=padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:14px;opacity:0.4;> (Click here to go to the link in your email) <\/p> <\/a>';
    }

    </script>
</head>

<body>
    <?php menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Recover Password</p>
                    </div>

                    <form class="centeredBlock padTopBot">
                        <label><input id="email" name="email" style=
                        "color:lightgray;" type="text" value="Email"></label>
                    </form>

                    <p class="textTitle" style=
                    "height:50px;float:center;text-align:center;font-weight:400;font-size:18px;">
                    An email will be sent to you with instructions on how to
                    recover your password.</p><span class=
                    " centeredBlock submit" onclick="messageGood()"></span>

                    <p class="textTitle" style=
                    "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;">
                    <span class=" centeredBlock submit" onclick=
                    "messageGood()">Submit</span></p><span class=
                    " centeredBlock submit" onclick="messageGood()"></span>

                    <div id="message"></div>
                </div>
            </div>
        </div>
    </div><!-- wrapper end -->
    <?php footer(); ?>
</body>
</html>
