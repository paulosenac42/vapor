<?php 

require('./modulos/conexao.php');

$id_categoria = $_GET['id'] ?? null;

$query_jogos = "SELECT * FROM jogo WHERE id_categoria = {$id_categoria}";
$jogos = mysqli_query($conn, $query_jogos);


if ($jogos->num_rows == 0) {

    $query_excluir_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}";
    mysqli_query($conn, $query_excluir_categoria);

} else {

    while ($jogo = mysqli_fetch_array($jogos)) {
        $id_jogo = $jogo['id'];
        $query_excluir_jogo_plataforma = "DELETE FROM jogo_plataforma WHERE id_jogo = {$id_jogo}";
        $query_excluir_jogo_idioma = "DELETE FROM jogo_idioma WHERE id_jogo = {$id_jogo}";
        $query_excluir_jogo = "DELETE FROM jogo WHERE id = {$id_jogo}";
        $query_excluir_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}";

        mysqli_query($conn, $query_excluir_jogo_plataforma);
        mysqli_query($conn, $query_excluir_jogo_idioma);
        mysqli_query($conn, $query_excluir_jogo);

    }

    $query_excluir_categoria = "DELETE FROM categoria WHERE id = {$id_categoria}";
    mysqli_query($conn, $query_excluir_categoria);

}

header('location: categorias.php');


?>