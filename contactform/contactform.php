<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
?>
<?php
  $to = "cristhiannrodrigues@gmail.com";
  $assunto = "Mensagem de ";
  mail($to,$assunto,$mensagem);
?>