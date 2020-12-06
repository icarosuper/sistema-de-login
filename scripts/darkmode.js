window.onload = function () { document.querySelector('#dmBtn').addEventListener('click', changemode); }

function changemode() {
	var mode = getCookie('mode');
	if(mode === ""){mode = 'light';}
	mode == 'dark' ? mode = 'light' : mode = 'dark';
	document.cookie = 'mode='+mode;
	location.reload();
};

function godark(){
	document.querySelector('body').classList.add('bg-dark', 'text-light');
}

function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
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
  