<?php
$ip4me = strip_tags($_POST['geoiphtmlvalue']);
$xml = file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=fee3fc0a7f640060078fe12d35a44f2003fbcea9da1bcd208d55ee66dc761b29&ip=' . $ip4me . '&format=xml');
echo $xml;

?>