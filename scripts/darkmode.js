var dark = false;
window.onload = function () { document.querySelector('#dmBtn').addEventListener('click', changemode); }
function changemode() {
	(dark = !dark) ? document.querySelector('body').classList.add('bg-dark', 'text-light') :
		document.querySelector('body').classList.remove('bg-dark', 'text-light');
}
