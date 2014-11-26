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
                        <p class="textTitle">Checkout</p>
                    </div>

                    




                    <?php 
                        if(!isset($_SESSION['host']) && !isset($_SESSION['user'])){
                    ?>

                    <!-- IF USER LOGGED IN PUT USER CREDENTIALS -->
                    <div class="padTopBot" style=
                    "width:50%;margin-right:auto;margin-left:auto;">
                        <form class="padTopBot" id="order" name="order">
                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            First Name</p><a id="donate" name="donate"></a>
                            <label><input id="email" name="name1" type=
                            "text"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Last Name</p><label><input id="pass" name="name2"
                            type="text"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Email</p><label><input id="pass" name="email" type=
                            "text"></label>

                            <p class="textTitle" style=
                            "font-size:18px;font-weight:400;width:100px;text-align:right;">
                            Phone</p><label><input id="pass" name="phone" type=
                            "text"></label>
                        </form>
                    </div><?php 
                        }
                        else{
                    ?>

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
                        </form>
                    </div><?php 
                        }
                    ?>
                    
                    <!-- SHOULD BE FAIRLY SIMPLE TO ADD THESE VALUES IN FROM THE ORDERS PAGE (I think) -->

                    <p class=text style="max-width:100%;margin-right:0px; text-align:right;">
                    Pickup Location: Street, City</p> <br>

                    <p class=text style="max-width:100%;margin-right:0px; text-align:right;">
                    2 Large Boxes ------- $0.00</p>
                    <p class=text style="max-width:100%;margin-right:0px; text-align:right;">
                    2 Small Boxes ------- $0.00</p>
                    <p class=text style="max-width:100%;margin-right:0px; text-align:right;">
                    Donation ------- $0.00</p><br>


                    <!----------------------------------------------------------------------------- -->


                    <p class="textTitle" style=
                    "float:none;text-align:right;margin-top:-30px;">Total:
                    $75.00</p><a class=" centeredBlock submit" href=
                    "ordersuccess.php" style=
                    "max-width:200px;margin-right:0px;">
                    <p class="textTitle" style=
                    "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;width:200px;">
                    Pay with PayPal</p></a>
                </div>
            </div>
        </div>
    </div><?php footer(); ?>
</body>
</html>
