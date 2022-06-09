<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Header
                    </div>
                    <div class="card-body">
                        <form method="post" >
                            <input type="text" placeholder="nombre y apellido" name="nombre" required > <br> <br>
                            <input type="email" placehoder="email" name="email" required >
                            <input type="text" placeholder="asunto" name="asunto" required > <br> <br>
                            <textarea name="mensaje" id="" cols="30" rows="10" placeholder="comentarios"></textarea> <br>
                            <br>
                            <input type="submit" name="enviar">
                        </form>
                    </div>
                
            </div>

            <div class="col-md-4">

            </div>
            
        </div>
    </div>

    <?php
        include("correo.php");
    
    ?>
        
    


    
</body>
</html>