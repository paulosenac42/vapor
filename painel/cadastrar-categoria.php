<?php
require("./modulos/conexao.php");

$nome_categoria = $_POST['category'] ?? null;

$consultar_categoria = "SELECT nome FROM categoria WHERE nome = '{$nome_categoria}'";

$criar_categoria = "INSERT INTO categoria (nome) VALUES ('{$nome_categoria}')";

$categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));

if ($categoria == null) {
   mysqli_query($conn, $criar_categoria);
   header("location: categorias.php");
} else {
    header("location: novo-categoria.php?error=Este categoria já está cadastrado");
}
?>