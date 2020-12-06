$(document).ready(function () {
	$('form').submit(function (e) {
		e.preventDefault();
		$('form *').prop('disabled', true);

		var name = $('#inputname').val();
		var email = $('#inputemail').val();
		var pass = $('#inputpw').val();

		$.ajax({
			type: 'POST',
			url: '../database/do_register.php',
			data: {
				do_register: "do_register",
				name: name,
				email: email,
				password: pass
			},
			success: function (response) {
				if (response == "success") {
					window.location.href = "login.php";
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