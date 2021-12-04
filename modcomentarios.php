<html> 
      <head>
         <title>Ejemplo de actualización de datos en base de datos MySQL</title>
      </head> 
 
      <body>
 
      <?php
 
     
      $host = "localhost";
 
     
      $puerto = "21";
 
   
      $usuario = "id17178686_luis77";
 
      
      $contrasena = "F)pq9/XJkxQBazxH";
 
      
      $baseDeDatos ="id17178686_smm";
 
      
      $tabla = "comentarios";
 
      function Conectarse()
      {
         global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;
 
         if (!($link = new mysqli('localhost','id17178686_luis77','F)pq9/XJkxQBazxH','id17178686_smm'))) 
         { 
            echo "Error conectando a la base de datos.<br>"; 
            exit(); 
            }
         else
         {
            echo "Listo, estamos conectados.<br>";
         }
         if (!mysqli_select_db($link, $baseDeDatos)) 
         { 
            echo "Error seleccionando la base de datos.<br>"; 
            exit(); 
         }
         else
         {
            echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
         }
      return $link; 
      } 
 
      $link = Conectarse();
 
      if($_POST)
      {
         $queryUpdate = "UPDATE comentarios SET nombre = '".$_POST['nombreForm']."',
                        gmail = '".$_POST['gmailForm']."',
                        telefono = '".$_POST['telefonoForm']."',
                        mensaje = '".$_POST['mensajeForm']."'
                        WHERE ID = ".$_POST['idForm'].";";
 
         $resultUpdate = mysqli_query($link, $queryUpdate); 
 
         if($resultUpdate)
         {
            echo "<strong>El registro ID ".$_POST['idForm']." con exito</strong>. <br>";
         }
         else
         {
            echo "No se pudo actualizar el registro. <br>";
         }
 
      }
 
      $query = "SELECT ID, nombre, gmail,telefono,mensaje FROM comentarios;";
 
      $result = mysqli_query($link, $query); 
 
      ?>
 
      <table>
         <tr>
            <td>nombre</td>
            <td>gmail</td>
            <td>telefono</td>
            <td>mensaje</td>
         <tr>
 
      <?php
 
     
      { 
         while($row = mysqli_fetch_array($result))  
         echo "<tr>";
         echo "<td>";
         echo $row["nombre"];
         echo "</td>";
         echo "<td>";
         echo $row["gmail"];
         echo "</td>";
         echo "<td>";
         echo $row["telefono"];
         echo "</td>";
         echo "<td>";
         echo $row["mensaje"];
         echo "</td>";
         echo "<td>";         
         echo "<a href=\"?id=".$row["ID"]."\">Actualizar</a>";
         echo "</td>";
         echo "</tr>";
 
      } 
 
      mysqli_free_result($result); 
 
      ?>
 
      </table>
      <hr>
 
      <?php
      if($_GET)
      {
         $querySelectByID = "SELECT ID, nombre,gmail,telefono,mensaje FROM comentarios WHERE ID = ".$_GET['id'].";";
 
         $resultSelectByID = mysqli_query($link, $querySelectByID); 
 
         $rowSelectByID = mysqli_fetch_array($resultSelectByID);
      ?>
 
      <form action="" method="post">
         <input type="hidden" value="<?=$rowSelectByID['ID'];?>" name="idForm">
         nombre: <input type="text" name="nombreForm" value="<?=$rowSelectByID['nombre'];?>"> <br> <br>
         gmail: <input type="text" name="gmailForm" value="<?=$rowSelectByID['gmail'];?>"> <br> <br>
         telefono: <input type="text" name="telefonoForm" value="<?=$rowSelectByID['telefono'];?>"> <br> <br>
         mensaje: <input type="text" name="mensajeForm" value="<?=$rowSelectByID['mensaje'];?>"> <br> <br>
         <input type="submit" value="Guardar">
      </form>
 
      <?php
      }
      mysqli_close($link);
      ?>
      </body> 
      </html>