$(function() {
	$('main').hide().fadeIn(700);
	$('#user_entry').hide().delay(700).fadeIn(700);

	$('#log_in').click(function() {
		var username = document.getElementById('username');
		var password = document.getElementById('password');

		if (username.value != "" && password.value != "")
		{
			document.location.href = 'tab2.html';
		}
		else
		{
			var options = {};
			$('#warning').text("Please, enter a valid username and a password.").addClass('warning').effect("shake", options, 500, callback);
		}
	});


	$( document ).tooltip({
      	position: {
      		my: "center top",
        	at: "center bottom+5",
      	}
    });

	function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn(700);
      }, 1000 );
    };
});


