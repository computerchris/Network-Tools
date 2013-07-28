
<html>
    <head>
    <title>Pineapple Bar: IPTools</title>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link rel="stylesheet" type="text/css" href="/includes/styles.css" /> 
    <link rel="icon" href="/favicon.ico" type="image/x-icon"> 
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> 
    </head>
<body>

<?php include("/pineapple/includes/navbar.php"); ?>
<br/><br /><br />
<div id="IPToolsBanner">
<p>
<pre><h1>IPTools</h1></pre>
<a><br /> Version 1.1 - Orange </a>
</p>
</div>
<div class=content>
<?php
include("ip2b.php");
echo "<br />";
include("subnetcalc.php");
echo"<br />";
//include("autosubnet.php");
?>
</div>
        <div class="sidepanelRight">
            <div class="sidepanelTitle">Ping</div>
            <div class="sidepanelContent">
			<?php
			include("ping.php"); //might as well borrow this rather than recode it
			?>
            </div>
        </div>
</body>
</html>