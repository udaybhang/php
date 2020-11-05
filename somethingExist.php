<?php  

$name = "DEVID";
$check = NULL;
// isset return true or false;
if(!isset($name)) {
	echo "Devid exist";
} else {
	echo "name not defined";
}
echo "<br />";
if(isset($check)) {
	echo "check found";
} else {
	echo "check not found";
}
 ?>