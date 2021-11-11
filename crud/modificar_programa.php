<!DOCTYPE html >
<html  lang = " es " >
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <títle> Modificar programa</title>
</head >
<body>
    <div  id="divconsulta" class="container">
        <Br>
        <div  id="div2">
            <div  id="div4">
                <form  class="formulario" role="formulario" method="post">
                    <div  class ="col-md-12 " >
                        <strong  class="lgris "> Ingrese criterio de busqueda </strong >
                        <Br > <br >
                        <div  class="form-row " >
                            <div  class = " form-group col-md-5 " >
                            <input  class="form-control" type= "text" name="nombre" min="" max = "" autofocus  value = "" placeholder="Nombre">
                            </div >
                            <br>
                            <div  class = " form-group col-md-3 " >
                             <input  class ="btn btn-primary" type ="submit" value ="Consultar">
                            </div >
                            <br>
                            <input  style="width: 10%;" class="btn btn-primary" type="button" onclick ="location.href='menu.php'" value="volver">
                        </div >
                        <Br >
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
                $vnombre=$_POST['nombre'];
                $miconexion=conectar_bd(  'localhost', 'root', '', 'sena_bd' );
                $resultado=consulta($miconexion, "select * from programa where progra_nombre='{$vnombre}'");
                if ($resultado->num_rows >0)
                    {
                    $fila=$resultado->fetch_object();
                    $_SESSION['ide1']=$fila->progra_id;
                    ?>
                <form  id="formulario2" role="form" method="post" action="actualizar_programa.php">
                        <div  class = " col-md-12" >
                            <strong  class = "lgris"> Datos del programa</strong >
                            <br>
                                <label  class= " lgris ">Tipo programa:</label >
                                <input  class = "form-control " type = "text" name ="tipo" disabled ="disabled " value ="<?php  echo  $fila->progra_tipo?>"/>

                                <label  for = " lgris "> Nombres: </label >
                                <input  class = " form-control " style="text-transform: uppercase; " type="text " name="nombre" required  value ="<?php  echo  $fila->progra_nombre?>"/>

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