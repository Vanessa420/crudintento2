<!DOCTYPE html >
<html  lang = " en " >
<head>
        <title>Menu principal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="miscss/estilos.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
    </head>
<body>
    <div  id="div1" class ="container">
    <Br>
        <div  id = " div2 " >
            <?php  session_start(); if (! empty ($_SESSION [ 'Tipo_usuario' ])) { ?> 
            <img  src = "" alt = "" >  <?php } ?>
                <div  id="div3">
                    <?php 
                    if ($_SESSION ['Tipo_usuario']=='ADMINISTRADOR')
                    { 
                    ?>
                    <form  id="formulario " role ="form" method ="post" action="guardado_programa.php" >
                        <div  class = " col-md-12 " >
                            <strong  class = " lgris " > Ingrese los datos del programa</strong >
                            
                            <br>
                            <label  class = " lgris ">Nombre programa:</label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="nombre" value = "" placeholder ="Nombre" required />
                            <label  class ="lgris">Tipo programa:</label>
                            <div  class = " form-group col-xs-2 " > 
                            <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','sena_bd');
                                $consulta = "SELECT * FROM tiposprograma";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                  <select class="form-control" name="otipo">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->tiposp_id;?>"><?php echo $opcion->tipos;?></option>
                                    <?php } ?>
                  </select>
                            </div >
                        </div >
                        <br>
                        <input  class = " btn btn-primary " type ="submit" value ="Guardar">
                        </div >
                        
                    </form >
                <?php
                    }
                    else
                    {
                        echo  "No tiene permisos para realizar esta acción" ;
                    }
                ?>
                <Br >
                </div >
        </div >
    </div >
    
</body >
</html >