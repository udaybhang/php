<?php   
if(!isset($_SESSION)) {
	session_start();
}

$pass = urldecode($_GET['p']);
if($pass == 'ABCD') {
$_SESSION['pass_correct'] = 1;

}

if(isset($_SESSION['pass_correct'])) {
	echo "loged in successfully";
}
else {
	echo "you have not entered the correct password.";
}
// url => http://localhost/php/session.php?p=ABCD
?>