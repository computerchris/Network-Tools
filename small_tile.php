<script type='text/javascript'>function ping(){
$('#pinghost').AJAXifyForm(popup);
return false;
} 
function tracert(){
$('#tracerthost').AJAXifyForm(popup);
return false;
}</script>
<form method="post" action="components/infusions/networktools/ping.php" id="pinghost"><input type="text" name="pinghost" > <!--input type="submit" value="<?=$strings["advanced-ping"]?>" name="submit"-->
<button type="button" onclick="ping()">Ping</button>
</form>
<form method="post" action="components/infusions/networktools/tracert.php" id="tracerthost"><input type="text" name="tracerthost" > 
<button type="button" onclick="tracert()">Trace Route</button>
</form>
