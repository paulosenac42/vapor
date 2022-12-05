<?php 

require('./modulos/conexao.php');

$nome_categoria = $_POST['category'] ?? null;
$id_categoria = $_POST['id'] ?? null;

$consultar_categoria = "SELECT nome FROM categoria WHERE nome = '{$nome_categoria}' AND id != '{$id_categoria}'";

$categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));

$atualizar_categoria = "UPDATE categoria SET nome = '{$nome_categoria}' WHERE id = {$id_categoria}";

if ($categoria == null) {
    mysqli_query($conn, $atualizar_categoria);
    header("location: categorias.php");
 } else {
     header("location: editar-categoria.php?error=Este categoria já está cadastrado&id={$id_categoria}");
 }

?>