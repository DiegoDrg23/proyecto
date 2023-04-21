<?php "include/conection.php";
?>
<body>
    <div class="container m-0 context justif.center py-2">
        <div class=" row text-center">
            <h1 class="text-success">registro</h1>
        </div>
        <form id=registro action ="<?php echo$_server['PHP_SELF'];?>" METHOD=POST>
        <div class="row text-center">
         <div class="col-sm-12 col-mol-12 col-ig-12">
            <input type="text" class="form-control" name="nombre" placeholder="nombre" required> 
         </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-mol-12 col-ig-12">
                <input type="text" name="apelldios" class="form-control" placeholder="apellidos" required>
            </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-mol-12 col-ig-12">
            <input type="text" class="form-control" name="direccion" placeholder="direccion" required> 
         </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="telefono" class="form-control" placeholder="telefono" required>
            </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-md-12 col-lg-12">
          <input type="email" name="email" class="form-control" placeholder="email" required>
        </div>
        </div>
        <div class="row text-center">
         <div class="col-sm-12 col-md-12 col-lg-12">
          <input type="date" name="fecha" class="form-control" placeholder="fecha" required>
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
