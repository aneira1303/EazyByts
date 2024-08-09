$(function() {
	$('div.users').hide().fadeIn(700);
	$('div.texts').hide().fadeIn(700);
	$('input').hide().fadeIn(700);
	$('.container_messages').effect("slide", options, 700, callback);

	// $('#small_button_last').click(function() {
	// 	document.location.href = 'tab4.html';
	// });

	// $('li').on('click', function() {
	// 	var copy = $(this).clone();
 //    	copy.dialog();
	// });

	$('li').on('mouseover', function() {
		$(this).css("cursor", "pointer");
		$(this).css("color", "green");
	});

	$('li').on('mouseout', function() {
		$(this).css("color", "black");
	});

	var options = {};

	$('li').effect("slide", options, 500, callback);

	function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };

    $('#small_button_last').click(function() {
		document.location.href = 'tab4.php';
	});
});
