<?php
$N = $_REQUEST['suboctet1'];
$O = $_REQUEST['suboctet2'];
$P = $_REQUEST['suboctet3'];
$Q = $_REQUEST['suboctet4'];
$N1 = decbin($N);
$O1 = decbin($O);
$P1 = decbin($P);
$Q1 = decbin($Q);
$N2 = str_replace('0','',$N1);
$O2 = str_replace('0','',$O1);
$P2 = str_replace('0','',$P1);
$Q2 = str_replace('0','',$Q1);
$cidr = strlen($N2) + strlen($O2) + strlen($P2) + strlen($Q2);
if ($cidr < 31){
$rcidr = 32 - $cidr;
}
if ($N > 255) {
echo " The first Octet is not valid "; }
if ($N < 0) {
echo " The first Octet is not valid ";
}
if ($O > 255) {
echo " The second Octet is not valid ";
}
if ($O < 0) {
echo " The second Octet is not valid ";
}
if ($P > 255) {
echo " The third Octet is not valid "; }
if ($P < 0) {
echo " The third Octet is not valid ";
}
if ($Q > 255) {
echo " The fourth Octet is not valid "; }
if ($Q < 0) {
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
