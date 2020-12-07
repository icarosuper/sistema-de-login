$(document).ready(function () {
	$('form').submit(function (e) {
		e.preventDefault();
		$('form *').prop('disabled', true);

		var email = $('#inputemail').val();
		var pass = $('#inputpw').val();

		$.ajax({
			type: 'POST',
			url: '../database/do_login.php',
			data: {
				do_login: "do_login",
				email: email,
				password: pass
			},
			success: function (response) {
				console.log(response);
				if (response == "success") {
					alert('Você logou com sucesso!')
					window.location.href = "logged.php";
				}
				else if (response == "fail") {
					alert('Email e(ou) senha errado(s)');
				}
				else{
					alert('Erro de código');
				}
			}
		});

		$('form *').prop('disabled', false);
		return false;
	})
})