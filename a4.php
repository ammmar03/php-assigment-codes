
<html>
<body>
	<h3> HTML input form </h3>
	<form method="POST">
		<h4>Please enter your First Name : </h4>
		<input type="text" name="f_name"><br>
		<h4>Please enter your Last Name : </h4>
		<input type="text" name="l_name"><br><br>
		<input type="submit" value="Display" name="submit">
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];

		echo "<h1><i> $f_name $l_name </i></h1>";
	}
?>
