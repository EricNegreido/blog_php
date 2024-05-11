<?php 

$miconexion = mysqli_connect("localhost","root", "", "bbdd_blog");

//Compruebo conexion

if(!$miconexion){
  echo "la conexion falló: " . mysqli_error();
  exit();
}

// verificamos la carga de la imagen

if($_FILES["img"]["error"]){

  switch($_FILES["img"]["error"]){
    case 1:
      echo "El tamaño del archivo excede el limite permitido por el servidor";
      break;
    case 2:
      echo "El tamaño del archivo excede los 2Mb permitidos";
      break;
    case 3:
      echo "El envío fue interrumpido";
      break;
    case 4:
      echo "No se ingreso archivo para enviar";
      break;
  }
}else{
  echo "Se accedio a la imagen exitosamente";

  if((isset($_FILES["img"]["name"]) && ($_FILES["img"]["error"] == UPLOAD_ERR_OK))){
    $destino_de_ruta="../img/";
    move_uploaded_file($_FILES["img"]["tmp_name"], $destino_de_ruta . $_FILES["img"]["name"]);

    echo "<br> El archivo " . $_FILES["img"]["name"] . " se ha cargado en el dir de imagenes <br>";

  }else{
    echo "<br> Erro al cargar la imagen <br>";
  }

  //variables del formulario
  $titulo = $_POST["titulo"];
  $comentario = $_POST["comentario"];
  $fecha = date("Y-m-d H:i:s");
  $img = $_FILES["img"]["name"];
  //consulta sql
  $sql = "INSERT INTO contenido (titulo, fecha, comentario, imagen) VALUES ('$titulo', '$fecha', '$comentario', '$img')";

  $resultado = mysqli_query($miconexion, $sql);
  //Cerramos conexion

  mysqli_close($miconexion);
  echo "<br> Se ha agregado el registro <br>" ;
}
?>