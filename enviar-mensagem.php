<?php

require('./modulos/conexao.php');

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$assunto = $_POST['assunto'] ?? null;
$mensagem = addslashes($_POST['mensagem']) ??null;
$estagio = ucfirst(mb_strtolower("Aberta"));

$query_inserir_mensagem = "INSERT INTO suporte (nome, email, assunto, mensagem, estagio) VALUES('{$nome}','{$email}','{$assunto}','{$mensagem}','{$estagio}')";
$inserir_mensagem = mysqli_query($conn, $query_inserir_mensagem);

if ($inserir_mensagem != null) {
    header('location: suporte.php?success=Mensagem enviada com sucesso!');
 }
?>



