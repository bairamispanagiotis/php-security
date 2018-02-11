<?php  

require 'app/db.php';
require 'app/functions.php';

$date = new DateTime('+1 week');
setcookie('session', 'abc', $date->getTimestamp());

if (!isset($_GET['username'])) {
	die();
}


$user = $db->prepare("SELECT * FROM users WHERE username = :username");

$user->execute([
	'username' => $_GET['username'],
]);

$user = $user->fetchObject();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User profile</title>
</head>
<body>
	<h2><?php echo e($user->username); ?></h2>
	<p><?php echo e($user->bio); ?></p>
</body>
</html>