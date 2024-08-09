$(function() {
	$('div').hide().fadeIn(1000);
	$('table').hide().delay(1000).fadeIn(1000);
	$('input').hide().delay(1000).fadeIn(1000);

	$('td#table_option').on('mouseover', function() {
		$(this).css("color", "green");
		$(this).css("cursor", "pointer");
	});

	$('td#table_option').on('click', function() {
		$('td').removeClass('selected');
		$(this).addClass('selected');
		$(this).siblings().addClass('selected');
	});

	$('td#table_option').on('mouseout', function() {
		$(this).css("color", "black");
	});

	$('#join_button').click(function()
	{
		var selected_number = $('.selected').size();
		if (selected_number > 0)
		{
			document.location.href = 'chat.php';
		}
		else
		{
			$("p#warning").text("Please select a server...")
		}
	});

	$('#small_button_back').click(function() {
		document.location.href = 'tab2.php';
	});
});
