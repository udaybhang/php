<form method="get" action="fun.php">
	First Name: <input type="text" name="name">
	<br>
	<!-- <input type="submit" name="submit", value="submitFname"> -->
	<input type="submit" value="submit">
</form>

<form method="post" action="fun.php">
	First Name: <input type="text" name="name">
	<br>
	<!-- <input type="submit" name="submit", value="submitFname"> -->
	<input type="submit" value="Submitpost">
</form>



<?php 
//this ask if submit button was pressed.
if(isset($_POST['submitbutton'])) {
	echo "your name is " . $_POST['fname'];
}

?>