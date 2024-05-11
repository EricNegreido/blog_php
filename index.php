<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      background-color:#005544;
    }
    form{
      display:flex;
      flex-direction:column;
      width: 50%;
      margin: 0 auto;
      gap:5px;
    }
  </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
  <label for="name"> Titulo </label>
  <input type="text" name="name">
  <label for="comentario"> Comentario </label>
  <textarea name="comentario" cols="15" row="10"></textarea>
  <label for="Selecione una imagen con tamaño inferior a 2 Mb"></label>
  <input type="file" >
  <input type="submit" value="Enviar">
  <div> <a href="blog.php"> Pagina de vizualizacion del blog </a></div>
</form>
</body>
</html>