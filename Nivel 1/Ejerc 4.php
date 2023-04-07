<?php
$x = 120; $y = 4; 
$n = 25.3; $m = 3.9 ;

echo "El valor de x es; ",$x , "<br>"; 
echo "El valor de y es; ",$y , "<br>";
echo "El valor de n es; ",$n , "<br>";
echo "El valor de m es; ",$m , "<br>";
echo "<b>","<br>";
echo "El resultado de las operaciones es:","<br>";
echo "Suma" , $x + $y ,"<br>";
echo "Resta: ",$x - $y,"<br>";
echo "Multiplicacion: ", $x * $y ,"<br>";
echo "Divion: ",$x / $y, "<br>";
echo "Modul: " ,$x % $y , "<br>";
echo "</b>","<br>";
echo "Suma" , $n + $m ,"<br>";
echo "Resta: ", $n - $m,"<br>";
echo "Multiplicacion: ", $n * $m ,"<br>";
echo "Divion: ",$n / $m, "<br>";
echo "Modul: " ,$n % $m , "<br>";


$var = array( "x"=>120 ,"y" => 4 ,"m" => 25.3 ,"n" => 3.9);
$suma = array_sum($var);
echo "La suma total es de: ",$suma,"<br>";

echo "FOREACH", "<br>";
foreach ($var as $val ){
    $mult = $val*2;
    echo $mult , "<br>";

}
echo "El producto de todas las variables es:","<br>";
echo $x*$y*$m*$n;

?>