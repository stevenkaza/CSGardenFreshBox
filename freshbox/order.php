<!DOCTYPE html>
<html>
<head>
    <meta content="Food!" name="description">
    <title>Garden Fresh Box Wireframe</title>
 <?php include('menus.php'); ?>
<style type=css>
#myform {
    text-align: center;
    padding: 5px;
    border: 1px dotted #ccc;
    margin: 2%;
}
.qty {
    width: 40px;
    height: 25px;
    text-align: center;
}
input.qtyplus { width:25px; height:25px;}
input.qtyminus { width:25px; height:25px;}
</style>

<script type="text/javascript">
jQuery(document).ready(function(){
    // This button will increment the value
    $('.plus2').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".minus2").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });


    // This button will increment the value
    $('.plus1').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".minus1").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
</script>
</head>

<body>
    <?php  menu(); ?>

    <div id="wrapper">
        <div class="grid listPage">
            <div class="mainBox">
                <div class="content">
                    <div class="head">
                        <p class="textTitle">Order</p>
                    </div>

                    <p class="text">Garden Fresh Box contents are seasonal.
                    Produce included is based on quality and
                    availability.</p>


                    <div class="head">
                        <p class="textTitle">Large Box Example</p>
                    </div>

 <p class="text">
10 apples,
2 lbs Spanish onions,
1 large cabbage,
1 butternut squash,
2 lb carrots,
1 lb candycane beets,
1 head garlic,
1 pie pumpkin,
4 pears,
1 bunch leeks,
1 head lettuce,
5 lb potatoes.
</p>



                    <div class="head">
                        <p class="textTitle">Small Box Example</p>
                    </div>

 <p class="text">
5 apples,
2 lb Spanish onions,
2 lb carrots,
1 lb candycane beets,
1 head garlic,
1 pie pumpkin,
4 pears,
1 red pepper,
1 head lettuce,
2.5 lb potatoes.


</p> <br> </div> </div></div>
        <div class="grid listPage">
<div class="mainBox">
                <div class="content">
 <div class="centeredBlock" style="min-height:220px;">
                        <div class="L" style="width:50%">
                            <p class="textTitle" style=text-align:center;float:none;font-weight:400;>Large Box - $20</p>
                            <img src="lrgBox.png"><br>
    <form id='myform' method='POST' action='#'>
    <input type='button' value='+' class="qtyplus plus2" style=width:80px;cursor:pointer;text-align:center;border-width:0px;background:rgb(87,159,120); field='quantity' />
    <input type='text' name='quantity' value='0' class='qty' style=width:80px;text-align:center />
    <input type='button' value='-' class="qtyminus minus2" field='quantity' style=width:80px;cursor:pointer;border-width:0px;background:rgb(87,159,120);  />
</form>
                        </div> 
                        <div class="R" style="width:50%">
                            <p class="textTitle" style=text-align:center;float:none;font-weight:400;>Small Box - $15</p>
                            <img src="smBox.png"> <br>
    <form id='myform' method='POST' action='#'>
    <input type='button' value='+' class="qtyplus plus1" style=width:80px;cursor:pointer;border-width:0px;background:rgb(87,159,120); field='quantity2' />
    <input type='text' name='quantity2' value='0' class='qty' style=width:80px;text-align:center />
    <input type='button' value='-' class="qtyminus minus1" field='quantity2' style=width:80px;cursor:pointer;border-width:0px;background:rgb(87,159,120);  />
</form>
                        </div><div style="clear:both"></div></div><br><br><br>

                    <div class="centeredBlock" style="min-height:220px;width:60%;">
                            <form class="padTopBot" id="order" name="order">
                                <p class="textTitle" style=
                                "font-size:18px;font-weight:400;width:100%;text-align:center;:">
                                Donation</p><br>
                                <a id="donate" name="donate"></a>
                                <label><input style=width:100% id="email" name="email" type=
                                "text"></label>

                            </form>

                            <form action="" >
                                <p class="textTitle" style=
                                "font-size:18px;font-weight:400;width:100%;text-align:center;">
                                Pick Up Location</p><br><label style=margin-left:auto;margin-right:auto;>
                                <select>

                                    <option value="1">
                                        Select Location
                                    </option>
                            <!-- ADD HOST LOCATIONS HERE WITH PYRAMIDS -->
                                    <option value="2">
                                        Street, City
                                    </option>
                    <!----------------------------------------------------------------------------- -->
                                </select></label>
                            </form><br>

                            <div class="head">
                                <p class="textTitle" style=
                                "text-align:center;float:none;">Total</p>


                    <!--ID:total is the total $ string, just calc it and upadte it real time -->
                                <p id=total class="textTitle" style=
                                "text-align:center;float:none;font-size:18px;font-weight:400;padding-top:0px;padding-bottom:30px;">
                                $0.00</p>
                    <!----------------------------------------------------------------------------- -->

                            <a class=" centeredBlock submit" href=
                            "checkout.php" style="max-width:140px;">
                            <p class="textTitle" style=
                            "padding-top:5px;padding-bottom:5px;float:none;text-align:center;font-Size:23px;">
                            Checkout</p></a>
                        </div>
                    </div><div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div><?php footer(); ?>
</body>
</html>
