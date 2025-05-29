<?php
$con = mysqli_connect('localhost', 'root', '', 'clientes25') or die
('Error en la conexion con el servidor local');
$sql = "INSERT INTO registro25
VALUES (null, '".$_POST ["nombre"]."', '".$_POST ["apellido"]."', 
'".$_POST ["email"]."',
'".$_POST ["pass"]."','".$_POST ["sexo"]."')";

$resultado = mysqli_query ($con, $sql) or die
('Error en el query destabase');
mysqli_close($con);
echo 'El nombre ingresado es: '.$_POST["nombre"].''.$_POST["apellido"].'<br>';
echo 'El correo es: '.$_POST["email"].'<br>';
echo 'El sexo es: '.$_POST["sexo"].'<br>';
?>