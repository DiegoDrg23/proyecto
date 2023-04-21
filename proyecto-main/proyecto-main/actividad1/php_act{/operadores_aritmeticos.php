<?php

$Variable =45;
$Msj ="El valor es: ";
$Num1= 56;
$Num2= 24;
$Num3= 89;
$Suma =$Num1+$Num2+$Num3;
echo "la suma de".$Num1."+".$Num2."+".$Num3."=".$Suma."<br>";
$resta=$Num1-$Num2-$Num3;
echo "la resta de".$Num1."-".$Num2."-".$Num3."=".$resta."<br>";
$Multiplicacion=$Num1*$Num2*$Num3;
echo "la multipliacion de".$Num1."*".$Num2."*".$Num3."=".$Multiplicacion."<br>";
$Division=$Num1/$Num2/$Num3;
echo "la division de".$Num1."/".$Num2."/".$Num3."=".$Division."<br>";

define ('Hora','60 minuts');
echo Hora;
echo constant('Hora')."<br>";
echo var_dump(constant('Hora'))."<br>";
echo var_dump($Suma)."<br>"."<br>";
$Radio=2;
define('Pi', '3.1416');
$Ejemplo = Pi * $Radio *$Radio; 
echo $Ejemplo;

$Mensaje2= "el area del circulo radio es ".$Radio." por le valor de Pi que es: ". Pi." el resultado es ".$Ejemplo;
echo $Msj2."<br>";

echo var_dump(constant('Pi'));
echo "<br>";
$Bajado =10;
echo "el valor del Bajado es: ".--$Bajado."<br>";

$Incremento = 10;
echo "el valor del incrementado es de: ".++$Incremento;
?>