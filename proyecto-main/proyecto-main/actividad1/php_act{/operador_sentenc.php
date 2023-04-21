<?php
$Val1=0;
$Val2=25;
$Val3=1;

if($Val1 >= $Val2){
     echo "verdadero";
}else{
    echo"falso";
}
$usuario="Hombre";

if($usuario == 'Hombre'){
 echo "como el genero de la variable persona es Hombre se llamara Luis"."<br> <br>";
}else{
    echo "no se cumple el if";
}

if($Val1 >= $Val2 &&  $Val1 >= $Val3 ){
echo"el valor de: ".$Valor1.  "es mayor a ".$Val2. "pero si mayor a  ".$Val3;

}else if($Val2 >= $Val1 and $Val2 >= $Val3 ){
 echo "el valor de:".$Val2." es mayor a ".$Val1." y mayor a ".$Val3;
}
else if ($Val3 >= $Val1 && $Valor3 >= $Val2) {
    echo "el valor de: ".$Val ."es mayor a " .$Val1." y mayor a ".$Val2;

}else{
    echo"no se cumple";
}

echo "<br> <br>";
 
$letra="a";
if($letra == 'd' || $letra == 'r' || $letra == 'g' || $letra == 'j'||$letra == 'f'){
    echo "el valor de la variable de la letra es ".$letra ." muy mal";
}else{
    echo "falta la constante?";
}
?>