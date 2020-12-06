$(document).ready(function () {
	$('form').submit(function (e) {
		e.preventDefault();
		$('form *').prop('disabled', true);

		var email = $('#inputemail').val();
		var pass = $('#inputpw').val();

		$.ajax({
			type: 'POST',
			url: '../php/do_login.php',
			data: {
				do_login: "do_login",
				email: email,
				password: pass
			},
			success: function (response) {
				if (response == "success") {
					window.location.href = "logged.php";
				}
				else if (response == "fail") {
					alert("Wrong Details");
				}
				else{
					alert('Program error');
				}
			}
		});

		$('form *').prop('disabled', false);
		return false;
	})
})