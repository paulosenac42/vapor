<?php
require('./modulos/top-menu.php');
$error = $_GET['error'] ?? null;

$query_categoria = "SELECT * FROM categoria ORDER BY nome ASC";
$categorias = mysqli_query($conn, $query_categoria);

?>

<div id="content-container">
    <form action="cadastrar-jogo.php" method="post">
        <div class="row">

            <div class="input-container quarter">
                <label for="name">Nome*</label>
                <input required name="name" id="name" class="row-input" type="text">
            </div>

            <div class="input-container quarter">
                <label for="price">Valor*</label>
                <input required name="price" id="price" class="row-input" type="number" min="0.00">
            </div>

            <div class="input-container quarter">
                <label for="image_url">Imagem*</label>
                <input required name="image_url" id="image_url" class="row-input" type="url">
            </div>

            <div class="input-container quarter">
                <label for="video_url">Video</label>
                <input name="video_url" id="video_url" class="row-input" type="url" min="0">
            </div>

        </div>

        <div class="row">

            <div class="input-container quarter">
                <label for="release_date">Lançamento*</label>
                <input required name="release_date" id="release_date" class="row-input" type="date">
            </div>

            <div class="input-container quarter">
                <label for="developer">Desenvolvedora*</label>
                <input required name="developer" id="developer" class="row-input" type="text">
            </div>

            <div class="input-container quarter">
                <label for="category">Categoria*</label>
                <select name="category" id="category" required>
                    <option value="" disabled selected>Selecione</option>

                    <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php } ?>

                </select>
            </div>


        </div>

        <div class="row">
            <div class="input-container full">
                <label for="description">Descrição*</label>
                <textarea required name="description" id="description" cols="30" rows="10"></textarea>
            </div>
        </div>




        <?php if ($error != null) { ?>
            <div class="row error-message"><?= $error ?></div>
        <?php } ?>

        <div class="row row-button">
            <button class="button-default" type="submit">Salvar</button>
        </div>
    </form>
</div>

<?php require('./modulos/footer.php') ?>