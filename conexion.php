<? php

$conexion =new mysqli('localhost','id17178686_luis77','F)pq9/XJkxQBazxH','id17178686_smm');
  mysql_select_db ("comentarios", $ conexion);
  
  mysql_query ("ESTABLECER NOMBRES 'utf8'");
  
  // date_default_timezone_set ("América / México");
  / *
  función limpiar ($ etiquetas) {
    $ etiquetas = strip_tags ($ etiquetas);
    $ etiquetas = stripslashes ($ etiquetas);
    $ etiquetas = htmlentities ($ etiquetas);
    $ etiquetas = mysql_real_escape_string ($ etiquetas);
    devolver $ etiquetas;
  }
  * /
?>