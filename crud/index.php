<!doctype html>
<html>
<head>
        <title>Menu principal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="miscss/estilos.css" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
    </head>
<body>
    <div id="div1" class="container">
            <div id="div2">
                <form id="formulario" method="post" action="menu.php">
                    <br>
                    <table>
                    <tr>    
                    <strong class="lgris">Iniciar sesión </strong>
                    <br>
                    <br>
                    <label class="lgris">Nombre de usuario:</label>
                    <br>
                    <input style="text-transform: uppercase;" type="text"
                    name="usuario" value="" required/>
                    <br>
                    <label class="lgris">Contraseña:</label>
                    <br>
                    <input type="password" name="clave" value="" required/>
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Entrar">
                    <br><br>
                     </tr>
                    </table>
                </form>
            </div>
        
    </div>
    <br><br>
</body>
</html>
