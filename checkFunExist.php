<?php   

function test() {
	// nothing is there but it still exist
}

if(function_exists("test")) {
	echo "this function exist return true";
}
if(function_exists("test1")) {
	echo "return false";
}
?>