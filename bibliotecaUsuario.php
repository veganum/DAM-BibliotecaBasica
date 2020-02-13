<style type="text/css">
    html {
        background: green;
    }
    
      th {
        
        background: grey;
    }
  
</style>


<?php
include ("conexion.php");
@$ISBN=$_POST["ISBN"];
@$TITULO=$_POST["TITULO"];
@$AUTOR=$_POST["AUTOR"];
@$PRECIO=$_POST["PRECIO"];
@$cantidad=$_POST["cantidad"];



$consulta="select * from biblioteca";
$paquete=mysqli_query($conexion, $consulta);

echo "<center><h1><u>LISTADO DE LIBROS</u></h1></center>";
//--------------------------------------------------------------------------

echo "<table border=2>";
while($fila=mysqli_fetch_array($paquete)){

echo "<tr>";
echo "<tr>";
echo "<th> ISBN </th>"; 
echo "<th> TITULO </th>"; 
echo "<th> AUTOR </th>"; 
echo "<th> PRECIO </th> ";
echo "<th> CANTIDAD </th></tr> ";    
echo "<td>","<input type='text' name='dni' value='$fila[ISBN]'>","</td>";
echo "<td>","<input type='text' name='usuario' value='$fila[TITULO]'>","</td>";
echo "<td>","<input type='text' name='apellido' value='$fila[AUTOR]'>","</td>";
echo "<td>","<input type='text' name='dni' value='$fila[PRECIO]'>","</td>";
echo "<td>","<input type='text' name='dni' value='$fila[cantidad]'>","</td>";
echo "<td>","<input type='submit' name='sumar' value='mas'>","</td>";
echo "<td>","<input type='submit' name='restar' value='menos'>","</td>";
echo "<br>";
echo "</tr>";
} echo "</table>";
//----------------------------------------------------------

?>

<br>

<button onclick="myFunction()">PRESTAMO</button>

<p id="demo"></p>

<script>
function myFunction() {
    var person = prompt("Introduzca el titulo del libro que quiera adquirir", "......");
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "El libro: " + person + " ha sido reservado";
    }
}
    
</script>




<FORM>
<br>

<input name="button1" type="button" 
onclick='alert("El prestamo ha devuelto,gracias.")' value="DEVOLUCION" />

</FORM>
