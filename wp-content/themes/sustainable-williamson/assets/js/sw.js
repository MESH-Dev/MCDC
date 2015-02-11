jQuery(document).ready(function($){
  //Are we loaded?
  console.log('hell yeah!');

  try{Typekit.load();}catch(e){}

  // Background images on homepage

  $window = $(window);
  if( $window.width() > 1025){
    $('#overview').parallax("50%", 0.2);
    $('.header-image').parallax("50%", 0.2);
  };

  if( $window.width() <= 1025){
    $('.header-image').css("background-attachment", "scroll");
    $('#overview').css("background-attachment", "scroll");
  };

  // Transition on header nav

  $('.angle-left').click(function() {
    $('.nav-bar').toggleClass('show');
    $('.angle-left').toggleClass('upside-down');
  });

  // Slide out responsive navigation

  $('#menu').click(function() {
    $('#responsiveNav').toggle('slide', {direction:'right'}, 300);
  });

  // Toggle header tabs

  $('.top-1').hover(function() {
    $('.clinic-1').toggle();
    $('.clinic-2').toggle();
  });

  $('.top-2').hover(function() {
    $('.platform-1').toggle();
    $('.platform-2').toggle();
  });

  $('.top-3').hover(function() {
    $('.outreach-1').toggle();
    $('.outreach-2').toggle();
  });

  // New tabs

  /* ==========
     Variables
   ========== */
   var url = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');

  /* ==========
      Utilities
    ========== */
   function beginsWith(needle, haystack){
     return (haystack.substr(0, needle.length) == needle);
   };


  /* ==========
     Anchors open in new tab/window
   ========== */
   $('a').each(function(){

     if(typeof $(this).attr('href') != "undefined") {
      var test = beginsWith( url, $(this).attr('href') );
      //if it's an external link then open in a new tab
      if( test == false && $(this).attr('href') != '#' ){
        $(this).attr('target','_blank');
      }
     }
   });


});
