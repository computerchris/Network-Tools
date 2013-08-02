<?php
$host2 = $_POST[tracerthost];
$cmd = "traceroute $host2";
exec ($cmd, $responseArray);
foreach($responseArray as $responseString){ //The result of the command comes back as an array and if you try to echo it directly you get "Array" so I used a foreach loop to get each line as a string
echo ("$responseString<br />"); //each line should be on a new line in the html
}
//I copy pasta'd the ping program and replaced every instance of ping with tracert
?>