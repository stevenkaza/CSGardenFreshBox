<?php session_save_path($_SERVER['DOCUMENT_ROOT'] . '/freshbox');
ini_set('session.gc_probability', 1);
    session_start();


function signInUser(){
    $_SESSION['user'] = 0;
    header('Location: '.'../freshbox');
}
function signInHost(){
   $_SESSION['host'] = 0;
    header('Location: '.'../freshbox');
}
function signOut(){
    session_destroy();
    header('Location: '.'../freshbox');
}

if(isset($_GET['signin']) && $_GET['signin'] == 'user'){
    signInUser();
}
if(isset($_GET['signin']) && $_GET['signin'] == 'host'){
    signInHost();
}
if(isset($_GET['signout']) && $_GET['signout'] == 'yes'){
    signOut();
}


 ?><?php
function menu(){
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <div id="menubar">
        <a href="http://www.cabogie.com/freshbox">
        <div class="logo RO2"></div></a>

        <div class="nav">
            <a class="navDrop transptxtBlack" href="order.php"><img src=
            "apples.png" style=
            "margin-top: -52px;margin-left: auto;margin-right: auto;">
            Order</a> <a class="navDrop transptxtBlack" href=
            "hosts.php"><img src="carrots.png" style=
            "margin-top: -52px;margin-left: auto;margin-right: auto;">
            Hosts</a> <a class="navDrop transptxtBlack" href=
            "volunteer.php"><img src="onions.png" style=
            "margin-top: -52px;margin-left: auto;margin-right: auto;">
            Volunteer</a> <a class="transptxtBlack navDrop" href=
            "about.php"><img src="leak.png" style=
            "margin-top: -52px;margin-left: auto;margin-right: auto;">
            About</a> <?php 
                                    if(isset($_SESSION['user']) or isset($_SESSION['host'])){

                                 ?> <a class="navDrop transptxtBlack" href=
            "settings.php" style=
            "float: right; margin:67px 20px 0 0px; color:#233f2f;font-size:14px;width:87px;">
            <img src="gear.png" style="margin-top: -74px;"> Settings</a>
            <a class="navDrop transptxtBlack" href="menus.php?signout=yes"
            style=
            "float: right; margin:58px 20px 0 0px; color:#233f2f;font-size:14px;">
            Sign Out</a> <?php }
                else{

             ?> <a class="navDrop transptxtBlack" href="signin.php" style=
            "float: right; margin:58px 20px 0 0px; color:#233f2f;"><img src=
            "login.png" style="margin-top: -74px;"> Sign In</a> <?php }

             ?>
        </div>
    </div><?php

    }


    function footer(){
    ?>

    <div id="footer">
        <div class="C">
            <div class="footerstuff">
                <img src="freshboxLogo.png" style=
                "display:block;margin-left:auto;margin-right:auto;">

                <div class="footC">
                    <p style=
                    " letter-spacing: 2px; font: 8px 'Oswald', sans-serif;background:inherit;text-align:center;font-size:13px;color:#233f2f;">
                    This is a wireframe prototype. There is no real
                    functionality.</p>
                </div>
            </div>
        </div>
    </div><?php
    }
    ?>
</body>
</html>
