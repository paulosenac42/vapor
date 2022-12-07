<?php 
    require('./modulos/top-menu.php'); 
    $error = $_GET['error'] ?? null;
?>

<div id="content-container">
    <form action="cadastrar-idioma.php" method="post">
        <div class="row">
            <div class="input-container quarter">
                <label for="idiom">Idioma</label>
                <input name="idiom" id="idiom" class="row-input" type="text"onkeyup="transformar_primeira_letra_em_maiusculo(this)">
            </div>
        </div>

        <?php if($error != null) { ?>
            <div class="row error-message"><?=$error?></div>
        <?php } ?>

        <div class="row row-button">
            <button class="button-default" type="submit">Salvar</button>
        </div>
    </form>
</div>

<?php require('./modulos/footer.php') ?>