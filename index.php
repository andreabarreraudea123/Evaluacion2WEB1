<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<header>
        <h1 class="text-center mt-5">REGRISTRO DE USUARIOS</h1>
</header>

<main>

    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="text-center mt-5">Crear Registro</h4> 
                <br>
            <form>
                <div class="row align-items-center">
                    <div class="col">
                        <label class="sr-only" for="nombre">Name</label>
                        <input type="text" class="form-control mb-2" id="Nombre" placeholder="Nombre Usuario">
                    </div>
                        <div class="col">
                        <label class="sr-only" for="Correo">Correo</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@
                                    </div>
                                </div>
                                    <input type="text" class="form-control" id="Correo" placeholder="Correo Electrónico">
                            </div>
                        </div>

                                <div class="col">
                                   <label class="sr-only" for="password">Name</label>
                                   <input type="password" class="form-control mb-2" id="password" placeholder="Contraseña">
                                </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-2">Agregar</button>
                                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
  <div class="container">
    <div class="row">
        <div class="col">
        <h4 class="text-center mt-5">Consultar Registro</h4>
        <br>
            <form>
                <div class="row align-items-center" id="Consultar">
                    <div class="col-6">
                        <label class="sr-only" for="usuario"></label>
                        <input type="text" class="form-control mb-3" id="usuario" placeholder="Buscar Usuario">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Buscar</button>
                    </div>
                </div>
            </form>     
        </div>
    </div>
  </div>  
  <div class="container">
    <div class="row">
        <div class="col">
        <h4 class="text-center mt-5">Eliminar Registro</h4>
        <br>
            <form>
                <div class="row align-items-center" id="eliminar">
                    <div class="col-6">
                        <label class="sr-only" for="eliminarUsuario"></label>
                        <input type="text" class="form-control mb-2" id="eliminarUsuario" placeholder="Eliminar Usuario">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-2">Eliminar</button>
                    </div>
                </div>
            </form>     
        </div>
    </div>
  </div>  


</main>
<br><br><br><br>
<footer>
    <div id=piepagina>
    <h5> Andrea Barrera Olivares &copy </h5>
    <h5> &#9743; 3115632489 </h5>
    <h5>  Medellín-Colombia-2020 </h5>
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>