<?php
$hostraw = $_POST[pinghost];
$BAD = array("<",">","&","/","*","{","}","|","[","]",";","?",":",",","!","@","#","$","%","^","(",")");
$hostnotags = strip_tags($hostraw);
$hostrem = str_replace($BAD, '', $hostnotags);
$hostnotags = strip_tags($hostrem);
$hostclean = htmlspecialchars($hostnotags, ENT_QUOTES, 'UTF-8');
$cmd = "ping $hostclean -c5";
exec ($cmd, $responseArray);
foreach($responseArray as $responseString){ //The result of the command comes back as an array and if you try to echo it directly you get "Array" so I used a foreach loop to get each line as a string
echo ("$responseString<br />"); //each line should be on a new line in the html
}
?>







