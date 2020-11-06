<?php 
$err = $_FILES['pic']['error'];
if($err > 0) {
	echo "There was an error" . $err;
} else {
	echo "the file name is :".$_FILES['pic']['name'];
	echo "<br />";
	echo "the file type is :".$_FILES['pic']['type'];
	echo "<br />";
	echo "the file size is :".$_FILES['pic']['size'];
	echo "<br />";
	echo "the file stored in :".$_FILES['pic']['tmp_name'];
}

?>