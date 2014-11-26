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


 ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=0.8"
    name="viewport">

    <link href="gfb.css" rel="stylesheet" type="text/css">
    <link href="/favicon.ico" rel="icon" type="image/x-icon">
    <link href=
    'http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic|Oswald:400,700,300'
    rel='stylesheet' type='text/css'>
    <style type="text/css">
</style>
    <script src="http://code.jquery.com/jquery-1.6.min.js" type=
    "text/javascript"></script>
    <script src=sidescroll.js type="text/javascript"></script>

<?php

    <script src= sidescroll.js type="text/javascript"></script>


    <script src="http://code.jquery.com/jquery-1.6.min.js" type=
    "text/javascript"></script>

function menu(){
?>
<body>
    <div id="menubarFixed">
        <a href="http://www.cabogie.com/freshbox">
        <div class="logo RO2"></div></a>

        <div class="nav">
            <a class="navDrop transptxtBlack" href="order.php"><img src=
            "apples.png" style=
            "margin-left: auto;margin-right: auto;">
            Order</a> <a class="navDrop transptxtBlack" href=
            "hosts.php"><img src="carrots.png" style=
            "margin-left: auto;margin-right: auto;">
            Hosts</a> <a class="navDrop transptxtBlack" href=
            "volunteer.php"><img src="onions.png" style=
            "margin-left: auto;margin-right: auto;">
            Volunteer</a> <a class="transptxtBlack navDrop" href=
            "about.php"><img src="leak.png" style=
            "margin-left: auto;margin-right: auto;">
            About</a> <?php 
                                    if(isset($_SESSION['host'])){

                                 ?> <a class="navDrop transptxtBlack" href=
            "settings.php" style=
            "float: right; margin-right: 20px;">
            <img src="gear.png"> Settings</a> <?php }

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
                    Affiliated with <a class=RO2 style=color:white; href=http://www.guelphwellingtonlocalfood.ca/ >Guelph Wellington Local Food Initiative </a> </p>


                    <p style=
                    " letter-spacing: 2px; font: 8px 'Oswald', sans-serif;background:inherit;text-align:center;font-size:13px;color:#233f2f;padding-top:10px;padding-bottom:10px;"> 
                    <a class="RO2" style=color:white; href=about.php >Contact</a>
                     |
                                <?php 
                                    if(isset($_SESSION['host'])){

                                 ?>
                    <a class="RO2" style=color:white; href="menus.php?signout=yes" >Sign Out  </a>

                                <?php }
                                    else{

                                 ?>
                    <a class="RO2" style=color:white; href="signin.php" >Sign In  </a>
                                <?php }

                                 ?> </p>

                </div>
            </div>
        </div>
    </div><?php
    }
    ?>
</body>
</html>
