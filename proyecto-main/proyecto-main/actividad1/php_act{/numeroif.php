<?php


$Prom1=1;
$Prom2=0;
$Prom3=5;
$Prom4=6;
$Prom5=7;
$pasas=7;

 


if(is_numeric($Prom1)&& is_numeric($Prom2)&& is_numeric($Prom3)&& is_numeric($Prom4)&& is_numeric($Prom4)){
$promedio=($Prom1+$CProm2+$Prom3+$Prom4+$Prom5)/6;
  if($promedio>=$pasas){
    echo"sacaste ".$promedio." aprobado";
  }else{
    echo"sacaste ".$promedio." reprobado";
  }
}else{
echo "no valido";
}
echo"otra";
if(!is_numeric($Calificacion1)){
   echo "el valor de la calificacion es: ".$Calificacion1." mal ";
}
  elseif (!is_numeric($Calificacion2)) {
    echo "el valor de la calificacion es: ".$Calificacion2."  mal "; 
}
  
elseif (!is_numeric($Calificacion3)) {
    echo "el valor de la calificacion es: ".$Calificacion3."  mal";
 }

elseif (!is_numeric($Calificacion4)) {
    echo "el valor de la calificacion es: ".$Calificacion4."  mal";
 }

elseif (!is_numeric($Calificacion5)) {
    echo "el valor de la calificacion es: ".$Calificacion5." mal  ";
 }

else {
    $promedio=($Prom1+$Prom2+$Prom3+$Calificacion4+$Prom5)/5;
  if($promedio>=$pasas){
    echo"El promedio obtenido es de  ".$promedio." reprobado";

  }else{
    echo"El promedio obtenido es de".$promedio." reprobado";
  }
   
}

?>