<?php
  $nome = $_POST['campo_nome'];
  $email= $_POST['campo_email'];
  $mensagem= $_POST['msg'];
  $to = "eduardolima384@gmail.com";
  $assunto = "Mensagem de ".$email.com
  mail($to,$assunto,$mensagem);
?>