$(document).ready(function () {
	$('#dm_btn').click(function () {
		var mode = GetCookie('mode');
		if (mode === "") { mode = 'light'; }
		mode == 'dark' ? mode = 'light' : mode = 'dark';
		document.cookie = 'mode=' + mode;
		location.reload();
	})
})

function GetCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}
