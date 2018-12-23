

// Full page search menu
$(function() {
  $('a[href="#search"]').on("click", function(event) {
    event.preventDefault();
    $("#search").addClass("open");
    $('#search > form > input[type="search"]').focus();
  });

  $("#search, #search button.close").on("click keyup", function(event) {
    if (
      event.target == this ||
      event.target.className == "close" ||
      event.keyCode == 27
    ) {
      $(this).removeClass("open");
    }
  });

  $("form").submit(function(event) {
    event.preventDefault();
    return false;
  });
});



// Date and time
var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];
var dayNames= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]

var newDate = new Date();
newDate.setDate(newDate.getDate() + 1);
$('#Date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());


$(document).ready(function(){

	// var clickEvent = false;
	// $('#myCarousel').carousel({
	// 	interval:   4000
	// }).on('click', '.list-group li', function() {
	// 		clickEvent = true;
	// 		$('.list-group li').removeClass('active');
	// 		$(this).addClass('active');
	// }).on('slid.bs.carousel', function(e) {
	// 	if(!clickEvent) {
	// 		var count = $('.list-group').children().length -1;
	// 		var current = $('.list-group li.active');
	// 		current.removeClass('active').next().addClass('active');
	// 		var id = parseInt(current.data('slide-to'));
	// 		if(count == id) {
	// 			$('.list-group li').first().addClass('active');
	// 		}
	// 	}
	// 	clickEvent = false;
	// });
})

$(window).load(function() {
    var boxheight = $('#myCarousel .carousel-inner').innerHeight();
    var itemlength = $('#myCarousel .item').length;
    var triggerheight = Math.round(boxheight/itemlength+1);
	$('#myCarousel .list-group-item').outerHeight(triggerheight);
});





// Page Loader

 if ((".loader").length) {
      // show Preloader until the website ist loaded
      $(window).on('load', function () {
        $(".loader").fadeOut("slow");
      });
    }





