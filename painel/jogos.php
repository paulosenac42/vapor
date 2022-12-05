<?php

require('./modulos/top-menu.php');

$query_jogos = "SELECT id, nome FROM jogo";
$jogos = mysqli_query($conn, $query_jogos);

?>

<div id="content-container">
    <div id="button-container">
        <a href="novo-jogo.php">
            <button class="button-default">
                Novo Jogo
            </button>
        </a>
    </div>
    <div id="list-container">
        <table>
            <tr>
                <th>Jogo</th>
                <th class="center">Idiomas</th>
                <th class="center">Plataformas</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>

            <?php while ($jogo = mysqli_fetch_array($jogos)) { ?>

                <tr>
                    <td><?= $jogo['nome'] ?></td>
                    <td class="center"><a href="editar-idiomas-jogos.php?id=<?=$jogo['id'] ?>">Idiomas</a></td>
                    <td class="center"><a href="editar-plataformas-jogos.php?id=<?=$jogo['id'] ?>">Plataformas</a></td>
                    <td class="center"><a href="editar-jogo.php?id=<?=$jogo['id'] ?>">Editar</a></td>
                    <td class="center"><a href="excluir-jogo.php?id=<?=$jogo['id'] ?>">Excluir</a></td>
                </tr>

            <?php } ?>


        </table>
    </div>
</div>

<?php require('./modulos/footer.php') ?>