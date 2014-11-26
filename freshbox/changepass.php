<!DOCTYPE html>
<html>
<head>
    <meta content="Food!" name="description">
    <title>Garden Fresh Box Wireframe</title>
    <?php include('menus.php'); ?>
    <script type="text/javascript">
$(document).ready(function() {



    $('input[name="new"]').focus(function() {
    if  ($('input[name="new"]').attr('value') == 'New Password'){
        $('input[name="new"]').css('color', 'black');
        $('input[name="new"]').val('');
    }
    });
    $('input[name="new3"]').focus(function() {
    if  ($('input[name="new3"]').attr('value') == 'Current Password'){
        $('input[name="new3"]').css('color', 'black');
        $('input[name="new3"]').val('');
    }
    });

    $('input[name="new2"]').focus(function() {
    if  ($('input[name="new2"]').attr('value') == 'Re Enter New Password'){
        $('input[name="new2"]').css('color', 'black');
        $('input[name="new2"]').val('');
    }
    });



    });


    </script>
</head>

<body>
    <?php menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Change Password</p>
                    </div>

                    <form class="centeredBlock padTopBot">
                        <label><input id="new3" name="new3" onfocus=
                        "this.type='password'" style="color:lightgray;" type=
                        "text" value="Current Password"></label><br>
                        <label><input id="new" name="new" onfocus=
                        "this.type='password'" style="color:lightgray;" type=
                        "text" value="New Password"></label> <label><input id=
                        "new2" name="new2" onfocus="this.type='password'"
                        style="color:lightgray;" type="text" value=
                        "Re Enter New Password"></label>
                    </form><a class=" centeredBlock submit" href="success.php">
                    <p class="textTitle" style=
                    "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;">
                    Submit</p></a>

                    <div id="message"></div>
                </div>
            </div>
        </div>
    </div><!-- wrapper end -->
    <?php footer(); ?>
</body>
</html>
