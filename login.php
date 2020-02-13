<style type="text/css">
    div {
        text-align: center;
        padding: 25px;
        margin: 25px;
        border: 3px solid black;
        background: green;
    }
    p{
        text-align: right;
        padding: 25px;
        margin: 25px;
    }
</style>

<?php
//Conexion--------------------------------------------------------------
//include ("conexion.php");
if (!isset($_POST["boton"])){
    
//MENU------------------------------------------------------------------
 echo '
 <html>
 <body>
 <form  method="post" action="validacionlogin.php">
  <br><br><br><br><br><br><br><br> 
    <div>
    <u><h3>--BIBLIOTECA--</h3></u></center>
    <br>
 <!--   <input type="radio" name="permisos" value="admin" checked>Administrador
    <input type="radio" name="permisos" value="user">Usuario<br>-->
    <br>
    
     Introduzca un usuario:&nbsp &nbsp &nbsp &nbsp <input type="text" name="Usuario"><br><br></center>
     Introduzca una contrasena:&nbsp<input type="password" name="contrasena"><br><br>
    <input type="submit" name="boton" value="Siguiente">
    <input type="reset" value="Borrar">
    </div>
</form>
 </body>


<form  method="post" action="NuevosUsuarios.php">
<p>--->>>
<input  type="submit" name="NuevosUsuarios" value="REGISTRESE AHORA">
</p>
</form>

 </html>';
    
}else{


    
//LoginUSUARIO----------------------------------------------------------   
/*    
    if ($u=="user" && $c=="123" ){
            session_start();
            $_SESSION["autentificado"]="SI";
            header ("Location: bibliotecaUsuario.php");
        }else{
            header ("Location: login.php?errotusuario=si");
        }

 */
    
//LoginADMIN------------------------------------------------------------ 
/* 
    if ($u=="admin" && $c=="123"){
            session_start();
            $_SESSION["autentificado"]="SI";
            header ("Location: bibliotecaAdmin.php");
        }else{
            header ("Location: login.php?errotusuario=si");
        }
*/
    
}

?>
