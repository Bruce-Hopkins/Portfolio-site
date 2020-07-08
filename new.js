
/*DO NOT add the $ sign, for some reason, seeing as wordpress has it's own verion of JQuery on
it you don't have to add it.

*/


var isTheHomePage = false;
var scroll = window.requestAnimationFrame || function(callback){ window.setTimeout(callback, 1000/60)};
jQuery(document).ready(function($) {

  
  
  // If javascript doesn't load then the default should be this
  $("#cover").show();
  
  $("HamburgerIconGray").hide();
  
 
  // If it is the home page then...
  if (isTheHomePage) {
    
    // If it's the home page then buttons go white
    $("#HomeButton").css("color", "white");
    $("#ProjectsLink").css("color", "#D3D3D3");
    $("#AboutLink").css("color", "#D3D3D3");
  
    // Menu is white
    $("#mainMenu").css("background-color", "rgba(255, 255, 255, 0)");

    //Gray icon shows and white icon disapears

    
    $("#HamburgerIconGray").hide();
    $("#HamburgerIconWhite").show();
    
    
  } else {

    /*The buttons remain gray and main menu white if 
    it is not the home page */

    $("#HomeButton").css("color", "#696969");
    $("#ProjectsLink").css("color", "#808080");
    $("#AboutLink").css("color", "#808080");
    $("#mainMenu").css("background-color", "rgba(255, 255, 255, 1)");

    //Hide the white icon and gray icon show

    
    $("#HamburgerIconWhite").hide();
    $("#HamburgerIconGray").show();
    $("#FooterBackground".css("height", "55%"))

  }
  $(window).load(function() {
    $("#cover").hide();
    
    
  });
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    
    // If you scroll then...
    if (scroll > 0) {

      //Main menu becomes white and buttons gray
      $("#mainMenu").css("background-color", "rgba(255, 255, 255, 1)");

      $("#HomeButton").css("color", "#696969");
      $("#ProjectsLink").css("color", "#808080");
      $("#AboutLink").css("color", "#808080");

      //Hide Gray icon and appear white one

      
      $("#HamburgerIconGray").show();
      $("#HamburgerIconWhite").hide(); 
  
    }
    if (scroll < 1) {   
      
      //If the scroll is at the top
      if (isTheHomePage) {

        //Main menu goes transparent
        $("#mainMenu").css("background-color", "rgba(255, 255, 255, 0)");

        //Buttons are light colors
        $("#HomeButton").css("color", "white");
        $("#ProjectsLink").css("color", "#D3D3D3");
        $("#AboutLink").css("color", "#D3D3D3");

        //The White icon shows on tranparent background and hide gray one

        
        $("#HamburgerIconGray").hide();
        $("#HamburgerIconWhite").show(); 
        
      } 
      //If the scroll is lower
      else {

        //Main menu becomes white
        $("#mainMenu").css("background-color", "rgba(255, 255, 255, 1)");

        //Buttons are dark colors
        $("#HomeButton").css("color", "#696969");
        $("#ProjectsLink").css("color", "#808080");
        $("#AboutLink").css("color", "#808080");

      }

    }
    

  });




  

});




