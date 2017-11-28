
var main = function(){
    
$(".linkText").hover(call);
    
    
    
};
var call = function(){
    $(this).stop().animate({letterSpacing: "2"});
   $(this).animate({letterSpacing: "0"});
    //  alert();
    
};


$(document).ready(main);


