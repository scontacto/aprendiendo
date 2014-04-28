<html>
<head>
</head>
<body>
<?php
	echo $_SERVER['HTTP_USER_AGENT'];
?> 
	<br>
	<form href="accion.php" method="post">
		<p>Su nombre: <input type="text" name="nombre" /></p>
		<p>Su edad: <input type="text" name="edad" /></p>
		<p><input type="submit" /></p>
	</form>
<body>
<html>
