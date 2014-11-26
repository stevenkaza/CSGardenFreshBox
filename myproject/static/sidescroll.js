function scroller (){
        $(window).scroll(function(){
               $('#menubarFixed').css('left', 0 - $(this).scrollLeft());
                $('#footer').css('left', 0 - $(this).scrollLeft());
                $('#homebar').css('left', 0 - $(this).scrollLeft());
          });

    //$(window).load($(function(){
      //  var elem = $("#homebar");
      //  var top = elem.offset().top;

       // var scrollHandler = function(){

       //     var scrollTop = $(window).scrollTop();
        //    if (scrollTop<367) {
       //         $('#homebar').css('left', 0 - $(this).scrollLeft());$('#wrapper').css({marginTop:"-80px"});
          //      elem.css({position:"relative",top:"",marginTop:"-50px"});//should be "static" I think
        //    } 
          //  else {$('#wrapper').css({marginTop:"-50px"});
          //      elem.css({position:"fixed",top:(0+"px"),marginTop:"0px"});
         //   }
            
       // }

       // $(window).scroll(scrollHandler);scrollHandler()

   // }));


}


$(document).ready(function(){
    var isMobile = navigator.userAgent.match(/Mobile/i) != null;
    if (isMobile) {        
       /* $("html").attr("style", "width:640px;min-width:640px;max-width:640px;");
        $("body").attr("style", "width:640px;min-width:640px;max-width:640px;");
        $(".grid").attr("style", "width:640px;min-width:640px;max-width:640px;");
        $("#wrapper").attr("style", "width:640px;min-width:640px;max-width:640px;");
        $("#menubar").attr("id", "homebar");
        $("#homebar").attr("style", " width:640px;min-width:640px;max-width:640px;");
        $(".navEffectCover").attr("style", "position:absolute;");
        $("#footer").attr("style", "width:640px;min-width:640px;max-width:640px;");*/
    } 
    else scroller();
});

