<?php require('./modulos/top-menu.php');

$id_mensagem = $_GET['id'];
$query_mensagens = "SELECT * FROM suporte WHERE id = '{$id_mensagem}'";
$mensagens = mysqli_fetch_array(mysqli_query($conn, $query_mensagens));

?>
<div id="conteudo">
    <div id="button-container">
        <a href="mensagens.php">
            <button class="button-default">
                Voltar
            </button>
        </a>
    </div>
    <div id="list-container">
        <h2>DETALHES</h2>
        <h3>NOME</h3>
        <div class="mensagem"><?=ucwords(mb_strtolower($mensagens['nome']))?></div>
        <h3>EMAIL</h3>
        <div class="mensagem"><?=$mensagens['email']?></div>
        <h3>ASSUNTO</h3>
        <div class="mensagem"><?=$mensagens['assunto']?></div>
        <h3>MENSAGEM</h3>
        <textarea name="mensagem" id="mensagem-usuario" readonly><?=$mensagens['mensagem']?></textarea>
    </div>
</div>