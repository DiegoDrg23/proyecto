<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operasor</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    
    <input type="text" name="nu" placeholder=" ingresa un numero" required>+
    <input type="text" name="num" placeholder=" ingresa un numero" required>
    <input type="submit" value="Sumar" name="btnsum">
    
</form>
</body>
</html>
<?php
if (isset($_POST['btnsum'])) {

    $Nu1=$_POST['nu'];
    $Num=$_POST['num'];

    if (!is_numeric($Nu1)) {
        echo "el valor asigando no es un valor numerico";
    }
    elseif (!is_numeric($Num)) {
        echo "el valor asigando en la caja 2 no es un valor numerico";
    }
    else{
        $suma=$Nu1+$Num;
        echo "el valor de la suma es ".$suma;
    }
}
?>
