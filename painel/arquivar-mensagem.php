<?php require('./modulos/top-menu.php');

$id_mensagem = $_GET['id'];

$query_alterar_estagio = "UPDATE suporte SET estagio = 'Fechado' WHERE id = '{$id_mensagem}'";
$mensagem = mysqli_query($conn, $query_alterar_estagio);

header('Location: mensagens.php')

?>
