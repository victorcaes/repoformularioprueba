<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>formulario 2</h2>
    <p>formuaorio co subida de archivos</p>
    
    <div class="card">
        <div class="card-header">
            Header
        </div>
        <div class="card-body">
            <form action="proceso2.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="nombre" name="nombre"> <br>
                <input type="text" placeholder="apellido" name="apellido"> <br>
                <input type="text" placeholder="numero de telefono" name="numero"> <br>
                <textarea name="comentarios" id="" cols="30" rows="10" placeholder="Escribe tu comentario"></textarea> <br>
                <input type="submit" value="Enviar" name="enviar">
            </form>
        </div>
        <div class="card-footer text-muted">
            
        </div>
    </div>
    
</body>
</html>