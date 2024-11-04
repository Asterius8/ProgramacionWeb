<?php

echo "Accediendo a la app"
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SRIPT_NAME'];

//obtener los datos del FORMULARIO
echo "<br>";
$usuario = $_POST['caja_usuarios'];
$contraseña = $_POST['caja_contraseña'];

echo "<br>";
echo $usuario;
echo "<br>";
echo $contraseña;

//validacion
echo "<br>";
echo isset($_POST['caja_usuarios'])

echo "<br>";
echo "Vacia: " . empty($_POST['caja_usuarios']);

if()
//verificar en BD usuario y contraseña

?>