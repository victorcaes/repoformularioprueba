<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formulario" action="enviar.php" enctype="multipart/form-data" method="post" name="formulario">
        <div>
          <label>Nombre y Apellido</label>
          <input id="nombre" name="nombre" required="" type="text" value="" />
        </div>
        <div>
          <label>E-mail</label>
          <input id="email" name="email" required="" type="email" value="" />
        </div>
        <div>
          <label for="File">Desde aqui podra subir su CV...</label>
          <input id="my_file" name="my_file" type="file" />
        </div>
        <button class="btn btn-danger" type="submit">Enviar</button>
    </form>
    
</body>
</html>


