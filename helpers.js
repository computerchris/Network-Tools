function lenotify(){
	notify('POW!', 'iptools', 'red');
	notify('POW!');
	notify('POW!');
	notify('POW!');
}
function sendip2b(){
$('#ip2b').AJAXifyForm(popup);
return false;
}
function sendsubmask(){
$('#subnetcalc').AJAXifyForm(popup);
return false;
}
function ping(){
notify("Pong!");
return false;
}