
<html>
    <!-- head>
    <title>Pineapple Bar: Network Tools</title>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link rel="stylesheet" type="text/css" href="/includes/styles.css"> 
    <link rel="icon" href="/favicon.ico" type="image/x-icon"> 
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
    <script type='text/javascript' src='<?=$rel_dir?>helpers.js'></script>

	</head -->
<head><script type='text/javascript'>
function sendip2b(){
$('#ip2b').AJAXifyForm(popup);
return false;
}
function sendsubmask(){
$('#subnetcalc').AJAXifyForm(popup);
return false;
}</script></head>
<body>
<!--button type="button" onclick="lenotify()">Notify</button-->

<br/><br /><br />
<center><div id="IPToolsBanner">
<p>
<pre><h1>Network Tools</h1></pre>
<a><br /> Version 1.3 - Mango </a>
</p>
</div>
<div class=content>


<?php
include("ip2b.php");
echo "<br />";
include("subnetcalc.php");
echo"<br />";

?>
</div>
 </center>       
</body>
</html>