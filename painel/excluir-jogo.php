<?php 

$id_jogo = $_GET['id'] ?? null;

require('./modulos/conexao.php');

$query_excluir_jogo_plataforma = "DELETE FROM jogo_plataforma WHERE id_jogo = {$id_jogo}";
$query_excluir_jogo_idioma = "DELETE FROM jogo_idioma WHERE id_jogo = {$id_jogo}";
$query_excluir_jogo = "DELETE FROM jogo WHERE id = {$id_jogo}";

mysqli_query($conn, $query_excluir_jogo_plataforma);
mysqli_query($conn, $query_excluir_jogo_idioma);
mysqli_query($conn, $query_excluir_jogo);

header('location: jogos.php');