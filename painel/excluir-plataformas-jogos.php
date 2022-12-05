<?php 

require('./modulos/conexao.php');

$id_jogo = $_GET['id_jogo'] ?? null;
$id_plataforma = $_GET['id_plataforma'] ?? null;

$query_excluir_plataforma = "DELETE FROM jogo_plataforma WHERE id_jogo = {$id_jogo} AND id_plataforma = {$id_plataforma}";
mysqli_query($conn, $query_excluir_plataforma);

header("location: editar-plataformas-jogos.php?id={$id_jogo}");

?>
