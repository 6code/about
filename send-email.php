<?php
   //Variáveis que recebem os dados digitados no formulário pelo id atribuído nos input
   $nome = $POST[nome]; 
   $email = $POST[email];
   $mensagem = $POST[mensagem];
 
   $to = "eduardolima384@gmail.com";
   $subject = "CONTATO PELO SITE";   
   $headers = "De:". $email;

   //funcao que realiza o envio do email
    $envio = mail($to, $subject, $mensagem, $headers);

    //verifica se foi enviado com sucesso!
    if($envio)
    echo "Mensagem enviada com sucesso";
    else
    echo "A mensagem não pode ser enviada";
?>