$(function() {
	$('.tab_three').hide().fadeIn(700);
	$('.create_chat').hide().delay(700).fadeIn(700);

	$( document ).tooltip({
      	position: {
      		my: "center top",
        	at: "center bottom+5",
      	}
    });

    $('#small_button').click(function() {
		var name = document.getElementById('name');
		var number = document.getElementById('number');

		if (name.value != "" && number.value != "")
		{
			document.location.href = 'tab5.html';
		}
		else
		{
			var options = {};
			$('#warning').text("Please, enter a valid username and a password.").addClass('warning').effect("shake", options, 500, callback);
		}
	});

	$('#small_button_back').click(function() {
		document.location.href = 'tab3.php';
	});

	function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn(700);
      }, 1000 );
    };
});
