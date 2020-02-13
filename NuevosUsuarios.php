<style type="text/css">
    div {
        text-align: center;
        padding: 25px;
        margin: 25px;
        border: 3px solid black;
        background: brown;
    }

</style>

<?php
include ("conexion.php");
if (!isset($_POST["submit"])){
 echo '<html><body>
 <form  method="post" action="NuevosUsuarios.php">
  <br><br><br><br><br><br><br><br> 
    <div>
    <u><h3>REGISTRO DE USUARIOS</h3></u></center>
    <br>
   
      &#9632;&nbspUSUARIO:&nbsp &nbsp &nbsp &nbsp &nbsp <input type="text" name="Usuario"><br><br></center>
      &#9632;&nbspCONTRASEÑA:&nbsp<input type="password" name="contrasena"><br><br>
     <input type="reset" value="Borrar">
     <input type="submit" name="submit" value="Siguiente">
    </div><br>
 </body></html>';
}else{
$u=$_POST["Usuario"];
$c=$_POST["contrasena"];




$consulta = "Insert into login values (' ','$u','$c','2')" ;




$paquete=mysqli_query($conexion, $consulta);
echo '
Usuario registrado <br><br>
<a href="login.php">VOLVER AL LOGIN</a>

';

} ?>




