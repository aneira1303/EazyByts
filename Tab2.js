$(function() {
	$('.row').hide().fadeIn(1500);

	$('img#choice_icon').on('mouseover', function() {
		$(this).animate({
		      	height: '270px',
		      	width: '270px',
		    });
		$(this).css("cursor", "pointer");
	});

	$('img#choice_icon').on('mouseout', function() {
		$(this).animate({
		      height: '200px',
		      width: '200px',
		    });
	});

	$('img#choice_icon').on('click', function() {
		var page = $(this).next().attr('id');
		document.location.href = page + '.php';
	});

	// $('li').on('mouseover click', function() {
 //    	$(this).removeClass('nohover').addClass('hover');
 //  	});

	$('#join_now').click(function() {
		document.location.href = 'tab4.php';
	});

	$('#create_now').click(function() {
		document.location.href = 'tab3.php';
	});
});
