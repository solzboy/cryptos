//[progress Javascript]

//Project:	Crypto Admin - Responsive Admin Template

$(function () {
  'use strict';
	// progress scrolling
  
	 setInterval(function(){ 
           // toggle the class every five second
           $('.progress').fadeIn('2000').css('right','0');  
           setTimeout(function(){
             // toggle back after 1 second
             $('.progress').fadeOut('100').css('right','57%');  
           },2000);
        },5000);
	
}); // End of use strict
