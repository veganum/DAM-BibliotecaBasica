<style type="text/css">
    html {
        background: orange;
    }
    
      th {
        
        background: yellow;
    }
  
</style>

<?php
include ("conexion.php");
@$ISBN=$_POST["ISBN"];
@$TITULO=$_POST["TITULO"];
@$AUTOR=$_POST["AUTOR"];
@$PRECIO=$_POST["PRECIO"];
@$Usuario=$_POST["Usuario"];
@$Contrasena=$_POST["Contrasena"];
@$M=$_POST["Submit"];
@$B=$_POST["borrar"];
@$i=$_POST["ID"];

$consulta="select * from biblioteca";
$paquete=mysqli_query($conexion, $consulta);

$consulta2="select * from login";
$paquete2=mysqli_query($conexion, $consulta2);

if (!isset($B) and !isset($M)){
echo "<center><h1><u>SISTEMA DE ADMINISTRACION</u></h1></center>";
echo "<br><br>";
//usuario---------------------------------------------------------------------------------
echo "<table border=2>";
echo "<th> USUARIO </th>"; 
echo "<th> Contraseña </th>"; 
while($fila=mysqli_fetch_array($paquete2)){
echo '<form method="post" action="bibliotecaAdmin.php">'; 
echo "<tr>"; 
echo "<td>","<input type='text' name='Usuario' value='$fila[Usuario]'>","</td>";
echo "<td>","<input type='text' name='contraseña' value='$fila[contrasena]'>","</td>";
echo "</tr>";
echo '</form>'; 
}echo "</table>"; {
    
}

//Biblioteca---------------------------------------------------------------------------------
echo "<table border=2>";
echo "<tr><th> ID </th>"; 
echo "<th> ISBN </th>"; 
echo "<th> TITULO </th>"; 
echo "<th> AUTOR </th>"; 
echo "<th> PRECIO </th></tr> ";     
while($fila=mysqli_fetch_array($paquete)){
echo '<form method="post" action="bibliotecaAdmin.php">'; 
echo "<tr>";
echo "<td>","<input type='text' name='ID' value='$fila[ID]'>","</td>";
echo "<td>","<input type='text' name='ISBN' value='$fila[ISBN]'>","</td>";
echo "<td>","<input type='text' name='TITULO' value='$fila[TITULO]'>","</td>";
echo "<td>","<input type='text' name='AUTOR' value='$fila[AUTOR]'>","</td>";
echo "<td>","<input type='text' name='PRECIO' value='$fila[PRECIO]'>","</td>";
echo "<td>","<input type='submit' name='Submit' value='Modificar'>","</td>";
echo "<td>","<input type='submit' name='borrar' value='Borrar'>","</td>";
echo "<br>";
echo "</tr>";
echo '</form>'; 
} echo "</table>";
}else{

if (isset ($M)){
//ACTUALIZAR------------------------------------------------------------
 $consulta="UPDATE biblioteca SET ISBN='$ISBN', TITULO='$TITULO', AUTOR='$AUTOR', PRECIO='$PRECIO' WHERE id='$i' ";
$paquete=mysqli_query($conexion, $consulta);
echo "Archivos modicados";
}else{
//BORRAR-----------------------------------------------------------------
 $borrar="DELETE FROM biblioteca WHERE id='$i' ";
$paquete=mysqli_query($conexion, $borrar);
echo "Archivos borrados";
}
}
//GUARDAR_---------------------------------------------------------------
if (!isset($_POST["submit"])){
echo '<html><body>
<form method="post" action="bibliotecaAdmin.php">
<br>
<h3><u>INTRODUCIR LIBROS</u></h3><br><br>
ISBN:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="ISBN"><br><br>
TITULO:&nbsp<input type="text" name="TITULO"><br><br>
AUTOR:&nbsp&nbsp<input type="text" name="AUTOR"><br><br>
PRECIO:&nbsp&nbsp<input type="text" name="PRECIO"><br><br>
<input type="submit" name="submit" value="Guardar">
</body></html>';
}else{
$ISBN=$_POST["ISBN"];
$TITULO=$_POST["TITULO"];
$AUTOR=$_POST["AUTOR"];
$PRECIO=$_POST["PRECIO"];
$consulta="INSERT INTO biblioteca VALUES (' ','$ISBN','$TITULO','$AUTOR','$PRECIO') " ;
$paquete=mysqli_query($conexion, $consulta);
echo '<html><body>Datos agregados</body></html>'; } 
?>







