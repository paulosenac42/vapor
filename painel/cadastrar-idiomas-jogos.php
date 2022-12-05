<?php 

require('./modulos/conexao.php');

$id_jogo = $_POST['id_jogo'] ?? null;
$id_idioma = $_POST['id_idioma'] ?? null;

$query_inserir_idioma = "INSERT INTO jogo_idioma (id_jogo, id_idioma) VALUES ({$id_jogo},{$id_idioma})";
mysqli_query($conn, $query_inserir_idioma);

header("location: editar-idiomas-jogos.php?id={$id_jogo}");
?>