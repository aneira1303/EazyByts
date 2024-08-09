const chatBox = document.querySelector("#result")
$(document).keypress(function(e){ //using keyboard enter key
	displayResult();

		if(e.which === 13){
				if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
						scrollToBottom();
					}
				});
			}
		}
	}
);


$(document).ready(function(){ //using the send button
	displayResult();
		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
						scrollToBottom();
					}
				});
			}
		});
	});

	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'send.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
				scrollToBottom();
			}
		});
	}

	function scrollToBottom() {
		chatBox.scrollTop = chatBox.scrollHeight;
	}
