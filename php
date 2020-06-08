<?php
$destino=$_POST['email'];
$asunto="comentario";
$comentario="
Email:$POST[email]
Comentario=$_POST[com]
";
$headers"=From;'$_POST['email']."\r\n".
      'Reply-To:'$.POST['email']."\r\n".
       'X-Mailer:PHP/'.phpversion();
mail($destino,$asunto,$comentario,$headers);
echo"Mensaje enviado";
?>
