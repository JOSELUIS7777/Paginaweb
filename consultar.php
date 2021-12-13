<?php 

/*$conexion =new mysqli('localhost','id18102413_luislp777177','VgTpF&5*@^|GKUOz','id18102413_farmacia');*/

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>mostrar datos</title>
</head>
<body>

<br>
<center><h1>TABLA DE COMENTARIOS<h1></center>

    <center> <table border="1" >
        <tr>
            
            <td>nombre</td>
            <td>gmail</td>
            <td>telefono</td>
            <td>mensaje</td>    
        </tr></center>

        <?php 
        $conexion= new mysqli('localhost','root','','smm');
        $consulta="SELECT * from comentarios";;
      
        $result=mysqli_query($conexion, $consulta);
        
        while($mostrar=mysqli_fetch_array($result)){

         ?>

        <tr>
            
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['gmail'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['mensaje'] ?></td>
        </tr>
    <?php 
    }
    echo"<a href='contact.html'><button>REGRESAR</button></a>";

     ?>
    </table>

    
</body>

</html>
