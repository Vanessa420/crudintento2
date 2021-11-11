<?php 
    include ( 'funciones.php' );
    session_start ();
  if (!isset($_SESSION['nusuario']))
  {
    $_SESSION['nusuario']=$_POST['usuario'];
    $_SESSION[ 'nclave']= $_POST['clave'];
  }           

    $conexion = conectar_bd ( '' , 'sena_bd' );
    $resultado=consulta($conexion , "select* from usuarios where usua_nomuser='{$_SESSION['nusuario']}' and usua_contra='{$_SESSION ['nclave']}'" );
?>

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
        <div  id="div1 " class="container">
            <Br>
            <div  id="div2">
                <div class="foto">
                   <img  src="img/10808.jpg" width="600px" heigt="300px">
                </div>
            <?php  if ($resultado->num_rows>0) { ?>   <?Php } ?>
                <div  id = " div3 " > 
            <?php
              if ($resultado->num_rows>0)
                 {
                    $fila=$resultado->fetch_object();
                    $_SESSION['Tipo_usuario']=$fila->usua_tipo;
            ?>
                    
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='registro_aprendiz.php'" value="Registro de aprendices">
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='consulta_aprendiz.php'" value="Consulta de aprendices">
            <Br> <br>
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='modificar_aprendiz.php'" value="Actualizacion de aprendices " >
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='borrar_aprendiz.php'" value="Borrar aprendices" >
            <Br> <br>
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='crear_programa.php'" value="Crear programa " >
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='consulta_programa.php'" value="Consultar programa " >
            <Br> <br>
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='modificar_programa.php'" value="Modificar programa " >
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='borrar_programa.php'" value="Eliminar programa " >
            <Br> <br>
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='crear_ficha.php'" value="Crear ficha">
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick="location.href='index.php'" value="Consultar ficha">
            <Br> <br>
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick ="location.href='index.php'" value="Modificar fichar">
            <input  style="width: 40%;" class="btn btn-primary" type="button" onclick ="location.href='index.php'" value="Eliminar ficha">
        <?php                       
         }
          else
         {
          echo  "Usuario o clave invalido" ;
         }
         $conexion->close();
        ?>
        <Br> <br>
    </div>
    </div>
        </div>
</body>
</html>    