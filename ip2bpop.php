<?php
$A = $_REQUEST['octet1'];
$B = $_REQUEST['octet2'];
$C = $_REQUEST['octet3'];
$D = $_REQUEST['octet4'];
$A1 = decbin($A);
$B1 = decbin($B);
$C1 = decbin($C);
$D1 = decbin($D);
if ($A > 255) {
echo " The first Octet is not valid "; }

if ($A < 0) {
echo " The first Octet is not valid ";
}
if ($B > 255) {
echo " The second Octet is not valid ";
}
if ($B < 0) {
echo " The second Octet is not valid ";
}
if ($C > 255) {
echo " The third Octet is not valid "; }
if ($C < 0) {
echo " The third Octet is not valid ";
}
if ($D > 255) {
echo " The fourth Octet is not valid "; }
if ($D < 0) {
echo " The fourth Octet is not valid ";
}
?>
<div id="binary">
<?php
echo "Binary:";
echo $A1;
echo " ";
echo $B1;
echo " ";
echo $C1;
echo " ";
echo $D1;
?>
</div>