<!DOCTYPE html>
<html>

<head>
    
	<meta name="description" content="Food!">
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



    <div id="wrapper" >
        <div class="grid listPage" >
            

            <div  class="mainBox"  >
                <div  class="content"  >
                    
                    <div class=head >
                        <p class=textTitle > Reset Password </p>
                    </div>

<p class="textTitle" style=height:20px;float:center;text-align:center;font-weight:400;font-size:18px;> Reset password for user@email.com. </p>

                    <form class="centeredBlock padTopBot">
                        <label>
                         <input id=new style=color:lightgray; value="New Password" type="text" name="new"onfocus="this.type='password'" >
                        </label>
                        <label>
                         <input id=new2 style=color:lightgray; value="Re Enter New Password" type="text" name="new2"onfocus="this.type='password'" >
                        </label>
                    </form>


                    <a href=success.php  class=" centeredBlock submit" > <p class=textTitle style=padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;> Submit </p> </a>

<div id=message>

</div>

                 </div>
                 </div>
            </div>
        </div>







    </div> <!-- wrapper end -->




       <?php footer(); ?>





 
   
</body>
</html>





