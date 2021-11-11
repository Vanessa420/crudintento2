<!DOCTYPE html>
<html lang="en">
<head>
        <title>Menu principal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="miscss/estilos.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
</head>
<body>
    <div id="divconsulta" class="container">
        <br>
        <div id="div2">
            <div id="div4" >
                <form name="formulario" role="form" method="post">
                    <div class="col-md-12">
                        <strong class="lgris"> Ingrese criterio de busqueda </strong>

                        <br><br>
                        <div class="form-row">
                        <label  class ="lgris">Nombre programa:</label>
                            <div class="form-group col-md-3">
                                <input class="form-control" type="text" name="nombre" min="" max="" value="" placeholder="Nombre"/>
                            </div>  
                            <br>
                            <label  class ="lgris">Tipo programa:</label>
                            <div  class = " form-group col-xs-2 " >
                            
                             <select  class ="form-control " name="tipo" >
                                <option  value = "">Técnico</option >
                                <option  value = "">Técnologo</option >  
                                <option  value = "">Auxiliar</option >  
                             </select >
                            </div >   
                            <br> 
                            <div class="form-group col-md-3">
                                <input class="btn btn-primary" type="submit" value="Consultar">
                            </div>
                        </div>
                        <br>
                    </div>
                </form>
                <br>
            </div>

            <div id="divconsulta2">
            <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
                {
                    include('funciones.php');
                    $vnombre=$_POST['nombre'];
                    $vtipo=$_POST['tipo'];
                    $conexion=conectar_bd('localhost', 'root', '', 'sena_bd' );
                    $resultado=consulta($conexion, "select * from programa where trim(progra_nombre) like '%{$vnombre}%' and trim(progra_tipo) like '%{$vtipo}%'");
                    if ($resultado->num_rows>0)
                        {
                            while ($fila = $resultado->fetch_object())
                            {
                                echo $fila->progra_id." ".$fila->progra_nombre."  ".$fila->progra_tipo."<br>";
                            }
                        }
                    else{
                        echo "No existen registros";
                        }   
                    $conexion->close();
                    }?>
            </div>
        </div>
    </div>
    
</body>
</html>
