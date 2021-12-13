<?php


$nombre =$_POST['nombre'];
$gmail =$_POST['gmail'];
$telefono =$_POST['telefono'];
$mensaje =$_POST['mensaje'];

echo $nombre;
echo $gmail;
echo $telefono;
echo $mensaje;

//echo "nombre: ".$nombre."correo: ".$correo."numero: ".$numero."mensage: ".$mensage;
//$conexion= new mysqli ('localhost','id16980624_jesus','2y^Pz-S3Vx_Gi0ri','/');/
$conexion =new mysqli('localhost','root','','smm');
if($conexion->connect_error){
die("werror de conexion".$conexion->connect_error);
}else{
  
    $sql = "  INSERT INTO comentarios ( nombre, gmail, telefono, mensaje) VALUES ( '".$nombre."', '".$gmail."', '".$telefono."', '".$mensaje."');";

if($conexion->query($sql)){
    echo "sumensage fue enviado";
//}else{
  //  echo "error en la insercion" .$conexion ->error;
}
echo"<a href='contact.html'><button>REGRESAR</button></a>";
}
?>
