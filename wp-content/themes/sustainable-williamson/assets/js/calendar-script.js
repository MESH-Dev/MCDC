jQuery(document).ready(function($){
  //Are we loaded?
  console.log('calendar page!');

  jQuery('#event-btn').addClass('active');
  jQuery('.calendar-by-date').hide();
  jQuery('.calendar-by-events').show();

  jQuery('#event-btn').click(function() {
    if (jQuery('#event-btn').hasClass('active')) {
      console.log('Do nothing.');
    }
    else {
      jQuery('#event-btn').addClass('active');
      jQuery('#date-btn').removeClass('active');
      jQuery('.calendar-by-date').hide();
      jQuery('.calendar-by-events').show();
    }
  });

  jQuery('#date-btn').click(function() {
    if (jQuery('#date-btn').hasClass('active')) {
      console.log('Do nothing.');
    }
    else {
      jQuery('#date-btn').addClass('active');
      jQuery('#event-btn').removeClass('active');
      jQuery('.calendar-by-date').show();
      jQuery('.calendar-by-events').hide();
    }
  });

});
