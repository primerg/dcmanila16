$(document).ready(function() {

  var nav_waypoint = new Waypoint({
    element: document.getElementById('bg-size'),
    handler: function(direction) {
      if (direction == 'up') {
        $('#nav-menu').removeClass('fixed-menu');
      }
      if (direction == 'down') {
        $('#nav-menu').addClass('fixed-menu');
      }
    }
  });

  $('#bs-example-navbar-collapse-1 li a').each(function() {
    $(this).click(function(e) {
      e.preventDefault();
      var div_id = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(div_id).offset().top - 100
      }, 500);
    });
  });


});