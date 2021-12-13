<?php 

$conexion =new mysqli('localhost','root','','smm');


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body style="background-color:yellow;">

<br>
<center><h1>TABLA DE PRODUCTOS<h1></center>

	<center> <table border="1" >
		<tr>
			
			<td>id_producto</td>
			<td>nombre</td>
			<td>precio</td>
            <td>existentes</td>
		</tr></center>

		<?php 
		$sql="SELECT * from productos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<td><?php echo $mostrar['existentes'] ?></td>
		</tr>
	<?php 
	}
	echo"<a href='reaserch.html'><button>REGRESAR</button></a>";

	 ?>
	</table>

	
</body>

</html>