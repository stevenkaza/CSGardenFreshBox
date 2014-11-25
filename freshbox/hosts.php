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
$(document).ready(function() {



    $('input[name="new"]').focus(function() {
    if  ($('input[name="new"]').attr('value') == 'Search Locations'){
        $('input[name="new"]').css('color', 'black');
        $('input[name="new"]').val('');
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
                    <p class="textTitle">Host Sites</p>
                </div>

                <p class="text">Host Sites are the locations that distribute
                the goods, they're where you'll be picking up your box!</p>

                <form class="padTop">
                    <label><input id="email" name="new" style=
                    "color:lightgray;width:70%;" type="text" value=
                    "Search Locations"></label>
                </form>
            </div>
        </div><img class="padTopBot gridImage" src="hosts.png" style=
        "max-width:900px;min-width:900px;"></div>
    </div><!-- wrapper end -->
    <?php footer(); ?>
</body>
</html>