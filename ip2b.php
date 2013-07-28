<br />
<a>
##########################################################################################################
<h3>IPv4 Decimal to Binary Converter</h3>
</a>
<br />
<a>IP:
<form method="POST">
<input type="number" name="octet1" maxlength="3">
<input type="number" name="octet2" maxlength="3">
<input type="number" name="octet3" maxlength="3">
<input type="number" name="octet4" maxlength="3">
<input type="submit" value="Convert">
</form>
</a>
<?php
$A = $_POST['octet1'];
$B = $_POST['octet2'];
$C = $_POST['octet3'];
$D = $_POST['octet4'];
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
echo "Binary:";
echo $A1;
echo " ";
echo $B1;
echo " ";
echo $C1;
echo " ";
echo $D1;
echo "<br />##########################################################################################################";
?>





