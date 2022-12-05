<?php 
    require('./modulos/top-menu.php'); 
    $error = $_GET['error'] ?? null;
?>

<div id="content-container">
    <form action="cadastrar-plataforma.php" method="post">
        <div class="row">
            <div class="input-container quarter">
                <label for="plataform">Plataforma</label>
                <input name="plataform" id="plataform" class="row-input" type="text">
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