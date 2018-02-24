<?php 


// if we check for password
$password = '$2y$12$fsn/3hAml.5dSVudEzuAI.LD3y4YT7DG6nO4YnkJj7Fhs4KT03NHW';
$submittedPassword = 'ilovecats';

$result = password_verify($submittedPassword, $password);

var_dump($result);


// setting password
//echo password_hash('ilovecats', PASSWORD_DEFAULT, ['cost' => 12]);

?>