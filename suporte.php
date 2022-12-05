<?php 
    $titulo_pagina = "Suporte";
    $success_message = $_GET['success'] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <?php require('./modulos/top-menu.php') ?>
    <body>
        <div id="body-container">
            <?php require('./modulos/side-menu.php') ?>
            <div id="content">
                <div id="header">SUPORTE</div>
                    <h3 id="titulo">Deixe sua mensagem</h3>
                    <form action="enviar-mensagem.php" id="formulario_suporte" method="POST">
                        <input type="text" name="nome" class="campo_form" placeholder="Nome" required>
                        <input type="email" name="email" class="campo_form" placeholder="E-mail" required>
                        <select name="assunto" id="assunto" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="Sugestão">Sugestão</option>
                            <option value="Crítica">Crítica</option>
                            <option value="Elogio">Elogio</option>
                            <option value="Dúvida">Dúvida</option>
                            <option value="Suporte">Suporte</option>
                            <option value="Outros">Outros</option>
                        </select>
                        <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
                        <button id="botao">Enviar</button>
                    </form>
                    <?php if($success_message != null) { ?>
                    <div class="success-message"><?=$success_message?></div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>