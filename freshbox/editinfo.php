<!DOCTYPE html>
<html>
<head>
    <meta content="Food!" name="description">
    <title>Garden Fresh Box Wireframe</title>
<?php include('menus.php'); ?>
</head>

<body>
    <?php  menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Edit Account Information</p>
                    </div>

                    <div class="padTopBot" style=
                    "width:50%;margin-right:auto;margin-left:auto;">
                        <form class="padTopBot" id="order" name="order">
                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            First Name</p><a id="donate" name="donate"></a>
                            <label><input id="email" name="name1" type="text"
                            value="Hallo"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Last Name</p><label><input id="pass" name="name2"
                            type="text" value="Wurld"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Email</p><label><input id="pass" name="email" type=
                            "text" value="user@email.com"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Phone</p><label><input id="pass" name="phone" type=
                            "text" value="892-432-5534"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Street</p><label><input id="pass" name="street"
                            type="text" value="Good Street"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            City</p><label><input id="pass" name="city" type=
                            "text" value="Kemptville"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Province</p><label><input id="pass" name="Province"
                            type="text" value="Ontario"></label>
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
