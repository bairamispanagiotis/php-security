<?php 

	require('app/db.php');

	if (isset($_POST['email'])) {
		$email = $_POST['email'];


		$user = $db->prepare("SELECT * FROM users WHERE email = :email");

		$user->execute([

			'email' => $email,
			
		]);

		if ($user->rowCount()) {
			die('Send email');
		}
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>sql injection</title>
 </head>
 <body>
 	
	<form action="sqlinjection.php" method="post" autocomplete="off">
		<input type="text" name="email" id="email">
		<input type="submit" recover>
	</form>

 </body>
 </html>