<?php
$hostrawB = $_POST[tracerthost];
$BADB = array("<",">","&","/","*");
$hostnotagsB = strip_tags($hostrawB);
$hostremB = str_replace($BADB, '', $hostnotagsB);
$hostnotagsB = strip_tags($hostremB);
$hostcleanB = htmlspecialchars($hostnotagsB, ENT_QUOTES, 'UTF-8');
$cmdB = "traceroute $hostcleanB";
exec ($cmdB, $responseArrayB);
foreach($responseArrayB as $responseStringB){ //The result of the command comes back as an array and if you try to echo it directly you get "Array" so I used a foreach loop to get each line as a string
echo ("$responseStringB<br />"); //each line should be on a new line in the html
}
?>

