<html>
<head>
  <title>Libros Libres - Peticiones Clientes</title>
</head>
<body>
<h1>Libros Libres</h1>
<h2>Peticiones clientes</h2>
<?

   $fp = fopen("../pedidos/pedidos.txt", "r");

   flock($fp, 1);

   if (!$fp)
   {
     echo "<p><strong>No hay órdenes pendientes."
         ."Por favor prueba de nuevo más tarde.</strong></p></body></html>";
     exit;

   }

   while (!feof($fp))
   {
      $order= fgets($fp, 100);
      echo $order."<br>";
   }
   flock($fp, 3);
/*
   echo "La posición final del archivo indicador es ".(ftell($fp));
   echo "<br>";
   rewind($fp);
   echo "Después de rewind, la posición es ".(ftell($fp));
   echo "<br>";
*/
   fclose($fp);
?>
</body>
</html>