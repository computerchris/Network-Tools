<?php
$ip4me = strip_tags($_POST['geoiphtmlvalue']);
$xml = file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=X&ip=' . $ip4me . '&format=xml');
echo $xml;

?>
