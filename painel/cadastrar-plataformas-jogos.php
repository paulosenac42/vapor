<?php 

require('./modulos/conexao.php');

$id_jogo = $_POST['id_jogo'] ?? null;
$id_plataforma = $_POST['id_plataforma'] ?? null;

$query_inserir_plataforma = "INSERT INTO jogo_plataforma (id_jogo, id_plataforma) VALUES ({$id_jogo},{$id_plataforma})";
mysqli_query($conn, $query_inserir_plataforma);

header("location: editar-plataformas-jogos.php?id={$id_jogo}");
?>