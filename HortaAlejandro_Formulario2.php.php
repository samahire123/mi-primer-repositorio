<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$nombre=$_POST['txtnombre'];
$apellidos=$_POST['txtapellidos'];
$celular=$_POST['txtcelular'];
$edad=$_POST['txtedad'];
$correo=$_POST['txtcorreo'];
echo 'nombre: '.$nombre.'echo<br>';
echo 'apellidos: '.$apellidos.'<br>';
echo 'celular: '.$celular.'<br>';
echo 'edad: '.$edad.'<br>';
echo 'correo: '.$correo.'<br>';



require("conexion.php");
mysqli_query($conexion, "insert_into $tbl_name(nombre,apellidos,celular,edad,correo)values
('$nombre','apellidos','$celular','$edad','$correo')")
or die ("problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo"<h1>el usuario fue dado de alta</h1>";




?>
</body>
</html>