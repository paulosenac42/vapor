<?php
require('./modulos/top-menu.php');
$error = $_GET['error'] ?? null;
$message = $_GET['message'] ?? null;
$id_jogo = $_GET['id'] ?? null;

$query_categoria = "SELECT * FROM categoria ORDER BY nome ASC";
$categorias = mysqli_query($conn, $query_categoria);

$query_jogo = "SELECT * FROM jogo WHERE id = {$id_jogo}";
$jogo = mysqli_fetch_assoc(mysqli_query($conn, $query_jogo));

?>

<div id="content-container">
    <form action="atualizar-jogo.php" method="post">
        <div class="row">

            <input type="hidden" name="id_jogo" value="<?=$id_jogo?>">

            <div class="input-container quarter">
                <label for="name">Nome*</label>
                <input required name="name" id="name" class="row-input" type="text" value="<?=$jogo['nome']?>">
            </div>

            <div class="input-container quarter">
                <label for="price">Valor*</label>
                <input required name="price" id="price" class="row-input" type="number" min="0.00" value="<?=$jogo['valor']?>">
            </div>

            <div class="input-container quarter">
                <label for="image_url">Imagem*</label>
                <input required name="image_url" id="image_url" class="row-input" type="url" value="<?=$jogo['imagem_url']?>">
            </div>

            <div class="input-container quarter">
                <label for="video_url">Video</label>
                <input name="video_url" id="video_url" class="row-input" type="url" min="0" value="<?=$jogo['video_url']?>">
            </div>

        </div>

        <div class="row">

            <div class="input-container quarter">
                <label for="release_date">Lançamento*</label>
                <input required name="release_date" id="release_date" class="row-input" type="date" value="<?=$jogo['data_lancamento']?>">
            </div>

            <div class="input-container quarter">
                <label for="developer">Desenvolvedora*</label>
                <input required name="developer" id="developer" class="row-input" type="text" value="<?=$jogo['desenvolvedora']?>">
            </div>

            <div class="input-container quarter">
                <label for="category">Categoria*</label>
                <select name="category" id="category" required>
                    <option value="" disabled selected>Selecione</option>

                    <?php while ($categoria = mysqli_fetch_array($categorias)) { ?>
                        <option 
                        
                        <?php if($categoria['id'] == $jogo['id_categoria']) { echo 'selected' ;}?>
                        
                        value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                    <?php } ?>

                </select>
            </div>


        </div>

        <div class="row">
            <div class="input-container full">
                <label for="description">Descrição*</label>
                <textarea required name="description" id="description" cols="30" rows="10"><?=$jogo['descricao']?></textarea>
            </div>
        </div>




        <?php if ($error != null) { ?>
            <div class="row error-message"><?= $error ?></div>
        <?php } ?>

        <?php if ($message != null) { ?>
            <div class="row success-message"><?= $message ?></div>
        <?php } ?>


        <div class="row row-button">
            <button class="button-default" type="submit">Salvar</button>
        </div>
    </form>
</div>

<?php require('./modulos/footer.php') ?>