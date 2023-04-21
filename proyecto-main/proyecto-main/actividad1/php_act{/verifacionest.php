<?php


$valore= array(false,true,null,'aeiou','23',23,'23.5','','','0',0); 
 foreach ($valore as $valor2){
    echo "es un string(";
     var_export($valor2);
    echo")=";

   echo var_dump(is_string($valor2));
 
echo"<br><br><br>";

}

$Mensaje=" cadena de caracteres";
if (is_string($Mensaje)) {
   
    echo $Mensaje."<br>";

var_dump($Mensaje);

}else{
    echo"no es una cadena de caracteres: ".$Mensaje; 
}
?>