<br />
<a>
<h3>Subnet Mask Info</h3>
</a>
<br />
<a>Subnet Mask:
<form method="POST">
<input type="number" name="suboctet1" maxlength="3">
<input type="number" name="suboctet2" maxlength="3">
<input type="number" name="suboctet3" maxlength="3">
<input type="number" name="suboctet4" maxlength="3">
<input type="submit" value="Get Info">
</form>
</a>
<?php
$PA = $_POST['suboctet1'];
$PB = $_POST['suboctet2'];
$PC = $_POST['suboctet3'];
$PD = $_POST['suboctet4'];
$PA1 = decbin($PA);
$PB1 = decbin($PB);
$PC1 = decbin($PC);
$PD1 = decbin($PD);
$PA2 = str_replace('0','',$PA1);
$PB2 = str_replace('0','',$PB1);
$PC2 = str_replace('0','',$PC1);
$PD2 = str_replace('0','',$PD1);
$cidr = strlen($PA2) + strlen($PB2) + strlen($PC2) + strlen($PD2);
if ($cidr < 31){
$rcidr = 32 - $cidr;
}
if ($PA > 255) {
echo " The first Octet is not valid "; }
if ($PA < 0) {
echo " The first Octet is not valid ";
}
if ($PB > 255) {
echo " The second Octet is not valid ";
}
if ($PB < 0) {
echo " The second Octet is not valid ";
}
if ($PC > 255) {
echo " The third Octet is not valid "; }
if ($PC < 0) {
echo " The third Octet is not valid ";
}
if ($PD > 255) {
echo " The fourth Octet is not valid "; }
if ($PD < 0) {
echo " The fourth Octet is not valid ";
}
$hosts = pow(2,$rcidr);
echo "<br /> CIDR:/";
echo $cidr;
//echo "<br />";
echo "  Hosts:";
echo $hosts -2;
if ($cidr > 31){
echo "<br />Invalid Mask";
}


?>
<br />
<a>##########################################################################################################</a>






