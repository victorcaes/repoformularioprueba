<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['mensaje']) &&  !empty($_POST['email'])){
            $name= $_POST['name'];
            $asunto=$_POST['asunto'];
            $mensaje=$_POST['mensaje'];
            $email=$_POST['email'];
            $header="from: noreply@example.com". "\r\n"  ;
            $header.="Reply-To:noreply@example.com". "\r\n";
            $header.="X-Mailer: PHP/".phpversion();

            $mail=mail($email,$asunto,$mesaje,$header);
            if($mail){
                echo "<h4>Mensaje enviado correctamente</h4>";
            }else{
                echo "Mensaje no se ha enviado (no funciona la funcion mail)";
            }

        }

    }


?>