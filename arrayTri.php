<?php

 $categorias=array(array(array("A", "Action",100),
                        array("P", "Photo",10),
                        array("F", "Flash",40)
                        ),
                   array(array("H", "Homero",23),
                        array("A", "Aristoteles",31),
                        array("P", "Platon",52)
                        ),
                   array(array("V", "Vilar",16),
                        array("E", "Engels",21),
                        array("S", "Serna",32)
                        )
                        );

   for($capa=0;$capa<3;$capa++)
   {
           echo "Capa $capa<br>";
           for($fila=0;$fila<3;$fila++)
           {
                   for($columna=0;$columna<3;$columna++)
                   {
                          echo"|".$categorias[$capa][$fila][$columna];
                          }
                          echo "|<br>";
                          }
                          } 












?>