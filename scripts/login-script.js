$(document).ready(function () {
	$('form').submit(function (e) {
		e.preventDefault();
		$('form *').prop('disabled', true);
		
		var email = $('#input_email').val();
		var pass = $('#input_pw').val();

		$.ajax({
			type: 'POST',
			url: '../database/login-operation.php',
			data: {
				email: email,
				password: pass
			},
			success: function (response) {
				if (response == 'success') {
					alert('Você logou com sucesso!')
					window.location.href = "user-page.php";
				} else {
					alert(response);
				}
			}
		});

		$('form *').prop('disabled', false);
		return false;
	})
})