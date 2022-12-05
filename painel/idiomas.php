<?php

require('./modulos/top-menu.php');

$query_idiomas = "SELECT id, nome FROM idioma";
$idiomas = mysqli_query($conn, $query_idiomas);

?>

<div id="content-container">
    <div id="button-container">
        <a href="novo-idioma.php">
            <button class="button-default">
                Novo Idioma
            </button>
        </a>
    </div>
    <div id="list-container">
        <table>
            <tr>
                <th>Idioma</th>
                <th class="center">Editar</th>
                <th class="center">Excluir</th>
            </tr>

            <?php while ($idioma = mysqli_fetch_array($idiomas)) { ?>

                <tr>
                    <td><?= $idioma['nome'] ?></td>
                    <td class="center"><a href="editar-idioma.php?id=<?= $idioma['id'] ?>">Editar</a></td>
                    <td class="center"><a href="excluir-idioma.php?id=<?= $idioma['id'] ?>">Excluir</a></td>
                </tr>

            <?php } ?>


        </table>
    </div>
</div>

<?php require('./modulos/footer.php') ?>