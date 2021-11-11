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
    <div  id="div1" class ="container" >
    <Br>
        <div  id = " div2 " >
            <?php  session_start(); if (! empty ($_SESSION [ 'Tipo_usuario' ])) { ?> 
            <img  src = "" alt = "" >  <?php } ?>
                <div  id="div3">
                    <?php 
                    if ($_SESSION ['Tipo_usuario']=='ADMINISTRADOR')
                    { 
                    ?>
                    <form  id="formulario " role ="form" method ="post" action="Guardado_Aprendiz.php" >
                        <div  class = " col-md-12 " >
                            <strong  class = " lgris " > Ingrese los datos del aprendiz </strong >
                            <Br >
                            <label  class = " lgris " > Identificación: </label >
                            
                            <div  class = " form-row " >
                            
                                <div  class = " form-group col-xs-2 " > 
                                 <select  class = " form-control " name = "tipoid" >
                                    <option  value = " CC " seleccionado > CC </option >
                                    <option  value = " TI " > TI </option >
                                    <option  value = " RC " > RC</option >
                                    <option  value = " PEP ">REP</option >
                                 </select >
                                </div >
                            </div >
                            <br>
                            <div  class = " del-grupo col-md-6 " >
                                <input class = " form-control input-lg " type = " number" name ="numid" min = " 9999 " max = " 9999999" value = "" placeholder ="identificacion" required />
                            </div >

                            <label  class = " lgris "> </label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="nombres" value = "" placeholder ="Nombres" required />
                                
                            <label  class = " lgris " > </label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="apellidos" value = "" placeholder = " Apellidos " required/>
                                
                            <label  class = " lgris " ></label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="direccion" value = "" placeholder = " Dirección " required/>

                            <label  class = "lgris"></label>
                            <input  class = " form-control " type = " number " name="telefono" min = " 9999 " max = " 99999999999 " value = "" placeholder = "TELEFONO" required/>

                            <label  class ="lgris"> </label>
                            <input  class ="form-control" type = " number " name="ficha" min = " 9999 " max = " 99999999999 " value = "" placeholder = " FICHA" required/>
                            <Br >

                            <input  class = " btn btn-primary " type ="submit" value ="Guardar">
                        </div >
                        <br>
                        <input  style="width: 10%;" class="btn btn-primary" type="button" onclick ="location.href='menu.php'" value="volver">
                        
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