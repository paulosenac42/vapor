<?php

require('./modulos/top-menu.php');

$id_jogo = $_GET['id'] ?? null;

$query_jogo = "SELECT nome FROM jogo WHERE id = {$id_jogo}";
$jogo = mysqli_fetch_assoc(mysqli_query($conn, $query_jogo));

$query_plataformas = "SELECT * FROM plataforma WHERE id IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$id_jogo})";
$plataformas = mysqli_query($conn, $query_plataformas);

$query_plataformas_cadastrar = "SELECT * FROM plataforma WHERE id NOT IN (SELECT id_plataforma FROM jogo_plataforma WHERE id_jogo = {$id_jogo})";
$plataformas_cadastrar = mysqli_query($conn, $query_plataformas_cadastrar);

?>

<div id="content-container">
   
    <div id="list-container">

        <table>
            <tr>
                <th>Plataformas - <?=$jogo['nome']?></th>
                <th class="center">Excluir</th>
            </tr>

            <?php while ($plataforma = mysqli_fetch_array($plataformas)) { ?>

                <tr>
                    <td><?= $plataforma['nome'] ?></td>
                    <td class="center"><a href="excluir-plataformas-jogos.php?id_plataforma=<?= $plataforma['id']?>&id_jogo=<?=$id_jogo?>">Excluir</a></td>
                </tr>

            <?php } ?>


        </table>

       <?php if($plataformas->num_rows == 0) { ?>
            <h1 id="empty-list">Não há plataformas cadastrados para o jogo <?=$jogo['nome']?></h1>
        <?php }  ?>

    </div>

    <div id="form-select-div">

            <form action="cadastrar-plataformas-jogos.php" method="post">

                <select required name="id_plataforma" id="plataforma">
                    <option value="" disabled selected>Selecione um plataforma</option>

                    <?php while ($plataforma = mysqli_fetch_array($plataformas_cadastrar)) { ?>
                     <option value="<?=$plataforma['id']?>"><?=$plataforma['nome']?></option>
                    <?php } ?>

                </select>
                
                <input type="hidden" value="<?=$id_jogo?>" name="id_jogo">

                <button type="submit">Cadastrar</button>

            </form>

    </div>

</div>

<?php require('./modulos/footer.php') ?>