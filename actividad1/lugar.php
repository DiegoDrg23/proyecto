<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>lugar</title>
</head>
<?php "include/conection.php";
?>
<body>
    <div class="container m-0 context justif.center py-2">
        <div class=" row text-center">
            <h1 class="text-success">lugar</h1>
        </div>
        <form id=registro action ="<?php echo$_server['PHP_SELF'];?>" METHOD=POST>
        <div class="row text-center">
         <div class="col-sm-12 col-mol-12 col-ig-12">
            <input type="text" class="form-control" name="nombre lugar" placeholder="nombre lugar" required> 
         </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-mol-12 col-ig-12">
                <input type="text" name="descripcion" class="form-control" placeholder="descripcion" required>
            </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-mol-12 col-ig-12">
            <input type="email" class="form-control" name="correo" placeholder="correo" required> 
         </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="telefono" class="form-control" placeholder="telefono" required>
            </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="facebook" class="form-control" placeholder="facebook" required>
        </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-md-12 col-lg-12">
          <input type="time" name="horario" class="form-control" placeholder="horario" required>
        </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <input type="submit" value="registrar" name="btn" class="btn-success">
         </div>
        </div>

</div>
</form>
</body>
