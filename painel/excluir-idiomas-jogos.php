<?php 

require('./modulos/conexao.php');

$id_jogo = $_GET['id_jogo'] ?? null;
$id_idioma = $_GET['id_idioma'] ?? null;

$query_excluir_idioma = "DELETE FROM jogo_idioma WHERE id_jogo = {$id_jogo} AND id_idioma = {$id_idioma}";
mysqli_query($conn, $query_excluir_idioma);

header("location: editar-idiomas-jogos.php?id={$id_jogo}");

?>
