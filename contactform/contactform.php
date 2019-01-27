<?php
  $nome = $_POST['nome'];
  $assunto = $_POST['subject'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
?>
<?php
  $to = "contato@toplogos.com.br";
  $msg .= "Mensagem de: ";
  $msg .= $nome;
  $msg .= "\nE-mail: ";
  $msg .= $email;
  $msg .= "\nAssunto: ";
  $msg .= $assunto;
  $msg .= "\nMensagem: ";
  $msg .= $mensagem;
  mail($to,$assunto,$msg);
?>