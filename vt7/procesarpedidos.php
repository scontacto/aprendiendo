<html>
<head>
  <title>Resultado de pedido de la librería</title>
</head>
<body>
<h1>Libros Libres</h1>
<h2>Resultado del pedido</h2>
<?
  $totalqty = 0;
  $totalqty += $actionqty;
  $totalqty += $photoqty;
  $totalqty += $flashqty;

  $totalamount = 0.00;

  define("ACTIONPRICE", 100);
  define("PHOTOPRICE", 10);
  define("FLASHPRICE", 4);

  $date = date("H:i, j F");

  echo "<p>Orden procesada a las ";
  echo $date;
  echo "<br>";
  echo "<p>Usted nos ha hecho el siguiente pedido:";
  echo "<br>";

  if( $totalqty == 0 )
  {
    echo "¡ No ha hecho ningún pedido en el formulario previo!<br>";
  }
  else
  {
    if ( $actionqty>0 )
      echo $actionqty." actionscript<br>";
    if ( $photoqty>0 )
      echo $photoqty." photoshop<br>";
    if ( $flashqty>0 )
      echo $flashqty." flash<br>";
  }

  $total = $actionqty * ACTIONPRICE + $photoqty * PHOTOPRICE + $flashqty * FLASHPRICE;
  $total=number_format($total, 2, ".", " ");

  echo "<P>El total de su pedido es ".$total."</p>";

  echo "<P>La dirección de envío es ".$direcc."<br>";

  $stringsalida = $date."\t".$actionqty." actionscript \t".$photoqty." photoshop\t"
                  .$flashqty." flash\t\$".$total
                  ."\t". $direcc."\n";

  // abrir fichero añadiendo
@ $fp = fopen("../pedidos/pedidos.txt", "a");

@  flock($fp, 2);

  if (!$fp)
  {
    echo "<p><strong> Su orden no ha podido ser procesada en este momento.  "
         ."Por favor inténtelo de nuevo más tarde.</strong></p></body></html>";
    exit;
  }

  fwrite($fp, $stringsalida);
  flock($fp, 3);
  fclose($fp);

  echo "<p>Su orden ha sido recibida y guardada.</p>";

?>
</body>
</html>