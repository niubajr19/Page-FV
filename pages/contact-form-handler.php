<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $assunto_email = $_POST['assunto'];

  $email_root = 'pedro.sousa@dcx.ufpb.br';
  $corpo_email = "Usuário: $nome \n".
                    "Email: $email \n".
                      "Mensagem do usuário: $mensagem";
  
  $para = 'pedro.sousa@dcx.ufpb.br';
  $headers = "De: $email_root \r\n";
  $headers .= "Responder para: $email \r\n";

  mail($para, $assunto_email, $corpo_email, $headers);
  header("Location: contato.php");












?>