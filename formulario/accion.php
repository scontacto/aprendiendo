<html>
<head>
  <title>Formulario de pedido de libros</title>
</head>
<body>
Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> a�os de edad.
</body>
</html>
























