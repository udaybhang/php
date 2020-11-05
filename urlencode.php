<?php  
$str = "my name is @udaybhan! Gupta";
$encode = urlencode($str);
echo $encode;
echo "<br />";
echo urldecode($encode);
?>