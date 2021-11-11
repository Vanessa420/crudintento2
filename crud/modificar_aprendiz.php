<!DOCTYPE html >
<html  lang = " es " >
<head>
        <title>Menu principal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="miscss/estilos.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
</head>
<body>
    <div  id = " divconsulta " class = " contenedor " >
        <Br >
        <div  id = " div2 " >
            <div  id = " div4 " >
                <form  class = "formulario" role = " formulario " method="POST">
                    <div  class = " col-md-12 " >
                        <strong  class = " lgris " > Ingrese criterio de busqueda </strong >
                        <Br > <br >
                        <div  class = " form-row " >
                            <div  class = " form-group col-md-5 " >
                            <input  class = " form-control " type = " number " name = "numid" min = " 9999 " max = " 99999999999 " autofocus  value = "" placeholder = "Identificación" >
                            </div >
                            <br> <br>
                            
                            <div  class = " form-group col-md-3 " >
                             <input  class ="btn btn-primary" type ="submit" value ="Consultar">
                            </div >
                        </div >
                        <Br >
                        <input  style="width: 10%;" class="btn btn-primary" type="button" onclick ="location.href='menu.php'" value="volver">
                    </div >
                </form>
                <Br>
            </div >
            <div  id = " divconsulta2 " >
            <?php
            if ($_SERVER['REQUEST_METHOD']==='POST')
                {
                include('funciones.php');
                session_start();
                $vnumid=$_POST['numid'];
                $miconexion=conectar_bd(  'localhost', 'root', '', 'sena_bd' );
                $resultado=consulta($miconexion, "select * from aprendices where apre_numid='{$vnumid}'");
                if ($resultado->num_rows >0)
                    {
                    $fila=$resultado->fetch_object();
                    $_SESSION['ide1']=$fila->apre_id;
                    ?>
                <form  id="formulario2" role="form" method="POST" action="actualizar_aprendiz.php">
                        <div  class = " col-md-12" >
                            <strong  class = "lgris"> Datos del aprendiz </strong >
                                <label  class= " lgris " > Id: </label >
                                <input  class = "form-control " type = "text" name ="numid" disabled ="disabled " value ="<?php  echo  $fila->apre_id  ?>"/>

                                <label  for = " lgris "> Nombres: </label >
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name ="nombres" required  value ="<?php  echo  $fila->apre_nombres  ?>"/>

                                <label  for = " lgris " > Apellidos: </label >
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name ="apellidos"   value = " <?php  echo  $fila->apre_apellidos  ?>" required />

                                <label  for = " lgris " > Dirección: </label >
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name ="direccion"   value ="<?php  echo  $fila->apre_direccion  ?>" required />

                                <label  for = " lgris " > Telefono: </label >
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name ="telefono"   value ="<?php  echo  $fila->apre_telefono  ?>" required />

                                <input  class ="btn btn-primary " type ="submit" value="Actualizar">
                                <Br >
                        </div >
                </form>
                <?php
                        }
                        else {
                            echo  "No existen registros" ;
                        }
                        $miconexion->close();
                    } ?>
            </div >
        </div > 
    </div >
</body >
</html >