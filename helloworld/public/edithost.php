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
</head><?php include('menus.php'); ?>

<body>
    <?php  menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Edit Host Site Information</p>
                    </div>

                    <div class="padTopBot" style=
                    "width:50%;margin-right:auto;margin-left:auto;">
                        <form class="padTopBot" id="order" name="order">
                            <p class="textTitle" style=
                            "float:none;text-align:center;font-size:18px;font-weight:400;">
                            Operating Hours</p><label>
                            <textarea cols="50" rows="4">
Mon-Fri: 6am-10pm
</textarea></label><br>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Email</p><label><input id="pass" name="email" type=
                            "text" value="host@email.com"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Phone</p><label><input id="pass" name="phone" type=
                            "text" value="431-456-6643"></label>
                        </form>
                    </div><a class=" centeredBlock submit" href=
                    "infosuccess.php" id="submit" name="submit">
                    <p class="textTitle" style=
                    "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;">
                    Submit</p></a>
                </div>
            </div>
        </div>
    </div><?php footer(); ?>
</body>
</html>
