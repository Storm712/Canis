<?php 
// Mostramos la sesion 
session_start(); 
//Distruimos la sesion 
session_destroy(); 
?> 
<!DOCTYPE html> 
<html> 
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
<head> 
<meta charset="UTF-8"/> 
<title>Cerrar Sesion</title>
</head> 
<body>
<h2>Has Cerrado Sesion correctamente</h2>
<br/>
<p><a href="Index.php">Ir al Login</a></p>
</body>
</html>