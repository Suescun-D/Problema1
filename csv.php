<¿<?php

//ubicacion csv 
define('CSV', 'Problema1.csv'); 
 
//leer csv 
$readCsv = array_map('str_getcsv', file(CSV)); 

foreach ($readCsv as $itemCsv) {
 //recorremos cerdas del csv
 foreach ($itemCsv as $elementoItemCSV) {
  //mostramos la celda
   echo $elementoItemCSV;
 }
}


?>