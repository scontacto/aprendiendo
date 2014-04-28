<html>
<head>
  <title>Formulario de pedido de libros</title>
</head>
<body>
Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años de edad.
</body>
</html>
























