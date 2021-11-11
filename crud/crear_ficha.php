<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/boostrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="Estilos.css">
    <script src="js/bootstrap.js"></script>
    <title>Crear fichas</title>
</head>
<body>
    <div id="div1" class="container">
    <br>
        <div id="div2">
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> 
            <img src="IMAGENES/banner3.png" alt=""> <?php } ?>
                <div id="div3">
                    <?php 
                    if ($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                    { 
                    ?>
                    <form id="formulario" role="form" method="post" action="guardado_fichas.php">
                        <div class="col-md-12">
                            <strong class="lgris">Ingrese los datos de la ficha</strong>
                            <br>
                            <label class="lgris">Numero:</label>
                <input class="form-control" type="number" name="nombre" min="9999" max="9999999999" value="" placeholder="Numero" required/>
                <br>

                            <label class="lgris">Elegir programa:</label>
                            <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','sena_bd');
                                $consulta = "SELECT * FROM programa";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="progra">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->Progra_id;?>"><?php echo $opcion->Progra_Nombre;?></option>
                                    <?php } ?>
                  </select>
               <br>
               <input class="btn btn-primary" type="submit" value="Guardar">
               <input style="width: 30%;" class="btn btn-primary" type="button" onclick="location.href ='menu.php'" value="volver">
             </div>
             </form>
             <?php
             }
             else
            {
              echo "No tiene permisos para realizar esta accion";
            }
            ?>
            <br>
            </div>
        </div>
    </div>
    
</body>
</html>