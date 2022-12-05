<?php 

require('./modulos/conexao.php');

$nome = $_POST['name'] ?? null;
$price = $_POST['price'] ?? null;
$image_url = $_POST['image_url'] ?? null;
$video_url = $_POST['video_url'] ?? null;
$release_date = $_POST['release_date'] ?? null;
$developer = $_POST['developer'] ?? null;
$category = $_POST['category'] ?? null;
$description = $_POST['description'] ?? null;

$buscar_jogo = "SELECT * FROM jogo WHERE nome = '{$nome}'";
$jogo = mysqli_query($conn, $buscar_jogo);

if ($jogo->num_rows > 0) {
    header('location: novo-jogo.php?error=Esse jogo já está cadastrado');
} else {

    $query_novo_jogo_com_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, video_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$price}, '{$description}', '{$image_url}', '{$video_url}', '{$release_date}', '{$developer}', {$category})";
    $query_novo_jogo_sem_video = "INSERT INTO jogo (nome, valor, descricao, imagem_url, data_lancamento, desenvolvedora, id_categoria) VALUES ('{$nome}', {$price}, '{$description}', '{$image_url}', '{$release_date}', '{$developer}', {$category})";
    
    if ($video_url == "") {
        mysqli_query($conn, $query_novo_jogo_sem_video);
    } else {
        mysqli_query($conn, $query_novo_jogo_com_video);
    }
    
    header('location: jogos.php');
}




?>