<?php 

$conexion =new mysqli('localhost','id17178686_luis77','F)pq9/XJkxQBazxH','id17178686_smm');


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body style="background-color:yellow;">

<br>
<center><h1>TABLA DE PRECIOS<h1></center>

	<center> <table border="1" >
		<tr>
			
			<td>MAGNA</td>
			<td>PREMIUM</td>
			<td>DIESEL</td>
				
		</tr></center>

		<?php 
		$sql="SELECT * from precios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['MAGNA'] ?></td>
			<td><?php echo $mostrar['PREMIUM'] ?></td>
			<td><?php echo $mostrar['DIESEL'] ?></td>
			
		</tr>
	<?php 
	}
	echo"<a href='index.html'><button>REGRESAR</button></a>";

	 ?>
	</table>

	
</body>

</html>