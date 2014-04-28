<html>
<body>
<table border = 0 cellpadding = 3>
<tr>
  <td bgcolor = "#CCCCCC" align = center>Distancia</td>
  <td bgcolor = "#CCCCCC" align = center>Costo</td>
</tr>
<?php 
for ($distancia=50; $distancia<=250; $distancia+=50)
{
echo "<tr>\n  <td align = right>$distancia</td>\n";
echo "  <td align = right>". $distancia / 10 ."</td>\n</tr>\n";
}
?>
</table>
</body>
</html>
