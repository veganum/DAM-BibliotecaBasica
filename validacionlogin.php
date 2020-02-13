<?php
include("conexion.php");


@$u=$_POST["Usuario"];
@$c=$_POST["contrasena"];

//codigo para el login---------------------------------------------------------
$consulta= "SELECT * FROM login WHERE Usuario='$u' and contrasena='$c' ";
$resultado = mysqli_query($conexion, $consulta);

$columna = mysqli_fetch_array($resultado);
$user = $columna['privilegio'];


if($columna['Usuario']==$u and $columna['contrasena']==$c){
    header("location: bibliotecaUsuario.php");
    
}else{
    
echo "usuario no registrado";
echo "<br> <br>";
 echo '<form action="login.php" method="post"></br><input type="submit" valuer="regresar"></form>';   
    
    
}


//Privilegios   admin 1 user 2-----------------------------------------------------
if ($user==1){
    header("location: bibliotecaAdmin.php");
}else if ($user==2){
    header("location: bibliotecaUsuario.php");
}else{
    echo 'El usuario no se encuentra registrado en la base de datos';
    echo '<form action="login.php" method="post"></br><input type="submit" valuer="regresar"></form>';
}


?>