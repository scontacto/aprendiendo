<?php
 // EJEMPLO DE ARRAY INDEXADO NUMÉRICAMENTE
   $libros[0]="Action, ";
   $libros[1]="Photoshop, ";
   $libros[2]="Flash, ";
   $libros[3]="Red hat.";
   for($i=0;$i<4;$i++)
   echo"$libros[$i]";

   //EJEMPLO DE ARRAY ASOCIATIVO
        $precios= array("Action"=>112, "Photo"=>24, "Flash"=>43);
         echo"<p>$precios[Action]</p>";
?>

