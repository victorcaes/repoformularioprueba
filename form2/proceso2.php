<?php
    $correo='eidos.caes@gmail.com';
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $numero=$_POST['numero'];
    $comentarios=$_POST['comentarios'];

    $mensaje="nombre: ".$nombre."apellido: ".$apellido." numero: ".$numero."comentarios: ".$comentarios;

    $email=mail($correo,'segundoform',$mensaje);

    if($email){
        echo "enviado correctamente";
        
    }else{
        echo "no se ha enviado correctamente";
    }


?>