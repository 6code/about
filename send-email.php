<?php
   //Variáveis que recebem os dados digitados no formulário pelo id atribuído nos input
   $nome = $POST[campo_nome]; 
   $email = $POST[campo_email];
   $mensagem = $POST[msg];

mail (
    "eduardolima384@gmail.com", //Endereço que vai receber a mensagem
    "Nome: $nome
     Email: $email
     Mensagem: $mensagem", "FROM:$nome<$email>");
?>