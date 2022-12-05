<?php 
    require('./modulos/top-menu.php'); 
    $error = $_GET['error'] ?? null;
    $id_categoria = $_GET['id'] ?? null;

    $consultar_categoria = "SELECT nome FROM categoria WHERE id = '{$id_categoria}'";
    $categoria = mysqli_fetch_assoc(mysqli_query($conn, $consultar_categoria));
?>

<div id="content-container">
    <form action="atualizar-categoria.php" method="post">
        <div class="row">
            <div class="input-container quarter">
                <label for="category">Categoria</label>
                <input value="<?=$categoria['nome']?>" name="category" id="category" class="row-input" type="text">
                <input value="<?=$id_categoria?>" name="id" type="hidden" >
            </div>
        </div>

        <?php if($error != null) { ?>
            <div class="row error-message"><?=$error?></div>
        <?php } ?>

        <div class="row row-button">
            <button class="button-default" type="submit">Atualizar</button>
        </div>
    </form>
</div>

<?php require('./modulos/footer.php') ?>