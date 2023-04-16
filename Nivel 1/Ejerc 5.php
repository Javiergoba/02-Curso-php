<?php
$array1= array(3,6,9,12,15);
$array2= array(2,4,8);
echo "Mostrar los datos del primer Array", "<br>";
var_dump($array1);
echo "<br>";
echo "Mostrar los datos del segundo Array", "<br>";
var_dump($array2);
echo "<br>";
echo "Añadir dato a un Array", "<br>";
$array2[]= 22;
var_dump($array2);
echo "<br>";
echo "Combinar los dos Arrays en uno", "<br>";
$comb = array_merge($array1,$array2);
var_dump($comb);
echo "Imprime la medida del array";
echo count($comb),"<br>";
echo "Mostrar los datos uno a uno del Array Fusionado", "<br>";
print_r ($comb);

?>