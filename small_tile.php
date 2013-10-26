<script type='text/javascript'>function ping(){
$('#pinghost').AJAXifyForm(popup);
return false;
notify('Pong!');
}
function tracert(){
$('#tracerthost').AJAXifyForm(popup);
return false;
}
function feedmeips(){
$('#geoiphtml').AJAXifyForm(popup);
return false;
}
function sendip2b(){
$('#ip2b').AJAXifyForm(popup);
return false;
}
function sendsubmask(){
$('#subnetcalc').AJAXifyForm(popup);
return false;
}</script>
<form method="post" action="components/infusions/networktools/ping.php" id="pinghost"><input type="text" name="pinghost" > <!--input type="submit" value="<?=$strings["advanced-ping"]?>" name="submit"-->
<button type="button" onclick="ping()">Ping</button>
</form>
<form method="post" action="components/infusions/networktools/tracert.php" id="tracerthost"><input type="text" name="tracerthost" > 
<button type="button" onclick="tracert()">Trace Route</button>
</form>
<form method="post"action="components/infusions/networktools/find.php" id="geoiphtml"><input type="text" name="geoiphtmlvalue" maxlength="15"> 
<button type="button" onclick="feedmeips()">Locate *</button>
</form>
<a><font color="Red">* Clicking the locate button will contact an external server</font></a>