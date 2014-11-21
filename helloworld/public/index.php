<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="Food!" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=0.8"
    name="viewport">

    <title>Garden Fresh Box Website</title>
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
                    <p class="textTitle" style=
                    "float:center;text-align:center;"><?php 
                        if(isset($_SESSION['host'])){

                     ?> Welcome back, Coordinator! <?php }
                        else if(isset($_SESSION['user'])){

                     ?> Welcome back, User! <?php }
                        else{


                     ?> Welcome To Garden Fresh Box! <?php }
                     ?></p>
                </div><img src="food.jpg"></div>
            </div>
        </div>

        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Some News</p>

                        <p class="date">Wednesday November 5th, 1988</p>
                    </div><img src="fruti.jpg">

                    <p class="text">A test. Here are some randomized
                    sentences.</p>

                    <p class="text">The cramp drives the vicious misprint
                    beneath the jail. Against a negative patent reigns an
                    initiated acceptance. The horrifying dream peers behind a
                    unusual girl. An owing atmosphere leaks. A result scores?
                    The only coffee tiles the structure under an edge stake.
                    Will the tune breathe within any socialist ceremony? The
                    numerous flavor persists beneath a sole birth. The lunatic
                    returns. A bump conceives the cozy culture. The atom stamps
                    the spontaneous thoroughfare beside the wind. The bookshop
                    defects in the jelly! A grain filters a gravitational
                    quibble throughout the ally. Why can't a paperback muddle
                    persuade whatever instinct?</p>
                </div>
            </div>
        </div>

        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Drive - 2011</p>

                        <p class="date">Wednesday November 5th, 2014</p>
                    </div>

                    <div class="padTopBot">
                        <div class="videoWrapper">
                            <iframe frameborder="0" height="720" src=
                            "//www.youtube.com/embed/CWX34ShfcsE?rel=0" width=
                            "1280"></iframe>
                        </div>
                    </div>

                    <p class="text">Drive is a 2011 American neo-noir arthouse
                    action crime thriller film directed by Nicolas Winding
                    Refn, starring Ryan Gosling, Carey Mulligan, Bryan
                    Cranston, Oscar Isaac, and Albert Brooks. It is adapted
                    from the 2005 James Sallis novel of the same name, with a
                    screenplay by Hossein Amini.</p>

                    <p class="text">Like the book, the film is about an unnamed
                    Hollywood stunt performer (played by Gosling) who
                    moonlights as a getaway driver. Prior to its September 2011
                    release, it had been shown at a number of film festivals.
                    At the 2011 Cannes Film Festival, Drive was praised and
                    received a standing ovation. Winding Refn won the
                    festival's Best Director Award for the film. Reviews from
                    critics have been positive, with many drawing comparisons
                    to work from previous eras. The film was nominated for Best
                    Film and Best Director at the 2012 British Academy Film
                    Awards (BAFTA).</p>
                </div>
            </div>
        </div>
    </div><?php footer(); ?>
</body>
</html>
