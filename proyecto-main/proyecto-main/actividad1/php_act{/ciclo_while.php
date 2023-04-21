<?php



$variable=0;
while ($variable < 25) {
    $variable ++;  
    echo"el valor de la variable es: = ".$variable."<br> <br>";

}
echo "el ciclo while acaba en ".$variable;

$Variable=9;
do {
 echo $Variable."<br>";
 $Variable++;

} while ($Variable <=10);

echo"<br><br>";
$numero=2;
$A=1;

while ($A<= 10):

    echo $A."x".$numero."=".($A *$numero)."<br>";
    $A++;

endwhile;
do {
    echo $numero." x ".$A. " =".($A*$numero)."<br>";
    $A++;
} while ($A <= 10);

?>