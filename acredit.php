<?php
$con=mysqli_connect('localhost', 'root',"", 'contacto') or die
('Error en la conexion con el servidor local');

$sql="INSERT INTO caninos VALUES(null, '".$_POST["nombre"]."','"
.$_POST["edad"]."', '".$_POST["Perros"]."', '".$_POST["adoptar"]."', '".$_POST["por"]."')";

$resultado=mysqli_query($con, $sql) or die
("Error en el query database");
mysqli_close($con);


?>

<script>
    location.href='Index.html';
</script>