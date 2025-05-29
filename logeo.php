<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login.php</title>
<style>
        body {
            background-color:rgb(158, 158, 158);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
 
    
   
       
        h2{
            background-color:rgb(204, 36, 34);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            color: white;
            width: 200px;
            text-align: center;
        }

        form{
            background-color:rgb(0, 0, 0);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
            color: white;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
echo "<p>Has iniciado sesion como: " . $_SESSION['nombre'] . "";
echo "<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>";
echo "<br><p><a href='PanCtrl.php'>Ir al panel de control</a>";
}else {
?>
<h2>Creando la sesion</h2>
<form action="PanCtrl.php" method="POST">
<p>Nombres:</p>
<p><input type="text" placeholder="Ingrese su Nombre" name="nombre" required/></p>
<p><input type="submit" value="Crear Sesion" /></p>
</form>
<?php
}
?>

</body>
</html>