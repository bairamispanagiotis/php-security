<?php 
	require('app/bootstrap.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Csrf protection</title>
</head>
<body>

	<form method="post" action="delete.php">
		<input type="submit" value="Delete my account">
		<input type="hidden" name="_token" value="<?php echo $_SESSION['_token'] ?>">
	</form>

</body>
</html>