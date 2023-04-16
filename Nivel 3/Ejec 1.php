<?php
$frase = "Hola que tal";// para empezar quitamos los espacios vacios en la frase str_replace 
$frase = str_replace(" ","",$frase);// str_replace ( elemento a eleminar, elemento cambiado , frase de donde se elimina)
echo $frase,"<br>";
$cadena = str_split($frase);// str_split hace que la frase se convierta en array.
echo "<pre>";
print_r ($cadena);
echo "</pre>";
?>