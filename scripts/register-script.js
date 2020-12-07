$(document).ready(function () {
	$('#show_pw').click(function(){
		var input = document.getElementById('input_pw');
		var confirm = document.getElementById('confirm_pw');
		input.type === 'password' ? input.type = confirm.type = 'text' : input.type = confirm.type = 'password';
	})

	$('form').submit(function (e) {
		e.preventDefault();
		$('form *').prop('disabled', true);

		var name = $('#input_name').val();
		var email = $('#input_email').val();
		var pass = $('#input_pw').val();

		$.ajax({
			type: 'POST',
			url: '../database/register-operation.php',
			data: {
				name: name,
				email: email,
				password: pass
			},
			success: function (response) {
				if (response == 'success') {
					alert('Usuário criado com sucesso!')
					window.location.href = "login-page.php";
				} else {
					alert(response);
				}
			}
		});

		$('form *').prop('disabled', false);
		return false;
	})
})