<?php
include('operations.php');

if (isset($_POST['Submit'])) {
	$insert_obj = new crud();
	$insert_obj->insert($_POST['name'], $_POST['pass']);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>INSERT</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		name: <br>
		<input type="text" name=name><br>
		password: <br>
		<input type="text" name=pass><br>
		<input type="submit" value="submit" name="Submit">
	</form>
</body>
</html>