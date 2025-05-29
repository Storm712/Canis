<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Panel Control</title>
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

        p{
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
<h2>La sesion creada correctamente</h2>

<p>
<?php
if(isset($_POST['nombre'])){
$_SESSION['nombre'] = $_POST['nombre'];
echo "Bienvenido! Has iniciado sesion como:<b> ".$_POST['nombre']."</b>";
}else{
if(isset($_SESSION['nombre'])){
echo "Has iniciado Sesion como: ".$_SESSION['nombre'];
}else{
// Si la sesion expiro o no se creo mostraremos el siguiente mensaje
echo "Acceso Restringido";
}
}
?></p>
<br>
<p><a href="Inicio.html">Ir a la página inicial</a></p>
<br>
<p><a href='CerrarSesion.php'>Cerrar Sesion</a></p>
</body>
</html>