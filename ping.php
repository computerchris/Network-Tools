<form method="post" action=""><input type="text" name="pinghost" > <input type="submit" value="<?=$strings["advanced-ping"]?>" name="submit"></form>
<?php
if(isset($_POST[pinghost])) {

$cmd = "ping $_POST[pinghost] -c5";
exec ($cmd, $output);
foreach($output as $outputline) {
echo ("$outputline<br />");}
//This was stolen and is not mine
}
?>







