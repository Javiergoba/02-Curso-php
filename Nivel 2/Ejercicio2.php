- Exercici 2
Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada i imprimeix la nova cadena.<br>
<?php
echo "<br></br>";
echo "<b> Primera forma de hacerlo </b>"."<br>";
$cadena = "aiguafrede";
$cambio="";
echo $cadena,"<br>";

$cambio.= substr($cadena,-1);// dejamos la cadena con el ultimo caracter con los negativos empezamos desde el final y con los positivos empezamos por el inicio. 
echo $cambio,"<br>";
$cambio.= substr($cadena,1,strlen($cadena)-2);// adjuntamos el ultimo caracter con la cadena original .= y quitamos el primer caracter. strlen= quitar el primer caracter de la frase.

echo $cambio,"<br>";
$cambio.= substr($cadena ,0,1);// adjuntamos la cadena pero solo el primer caracter. 0 retorna una frase vacia y el 1 recorta el primer caracter.
echo $cambio,"<br>";
echo "<br> </br>";

echo "<b> Segunda forma de hacerlo mas facil </b>"."</br>";
 $cadena = "hola mundo";
 echo $cadena, "<br>";

// intercambiamos las letras

 $primer = $cadena[0];
 $ultima = $cadena[strlen($cadena)-1];
 $cadena[0] = $ultima;
 $cadena [strlen($cadena)-1]= $primer;

echo "Nueva frase; " . $cadena;
?>