<?php


$nombre = $_POST ['nombre'];
$gmail = $_POST['gmail'];
$telefono= $_POST['telefono'];
$mensaje = $_POST['mensaje'];



$conexion =new mysqli('localhost','root','','smm');

if($conexion->connect_error){
die("error de conexion".$conexion->connect_error);
}else{
  $sql= "INSERT INTO comentarios (nombre,gmail,telefono,mensaje) VALUES ('".$nombre."','".$gmail."','".$telefono."','".$mensaje."');";

  if($conexion->query($sql)){

    echo"Registro insertado";
}else{
echo"Error de insercion".$conexion->error;
}
}
echo"<a href='contact.html'><button>REGRESAR</button></a>";

echo"<a href='consultar.php'><button>MOSTRAR DATOS</button></a>";

?>