var divs = $('.splash__title');
var divs2 = $('.splash');
var divs3 = $('.splash__image');
$(window).scroll(function(){
   if($(window).scrollTop()<10){
         divs.removeClass("splash__title--invisible");
         divs2.removeClass("splash--backgroundclr");
         divs3.removeClass("splash__image--clr");
   } else {
         divs.addClass("splash__title--invisible");
         divs2.addClass("splash--backgroundclr");
         divs3.addClass("splash__image--clr");
   }
});