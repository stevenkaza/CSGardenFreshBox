<!DOCTYPE html>
<html>
<head>
    <meta content="Food!" name="description">
    <title>Garden Fresh Box Wireframe</title>
    <?php include('menus.php'); ?>
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
</head>

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
