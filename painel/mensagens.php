<?php require('./modulos/top-menu.php');

$query_mensagens = "SELECT * FROM suporte WHERE estagio = 'Aberta'";
$mensagens = mysqli_query($conn, $query_mensagens);


?>
<?php if($mensagens -> num_rows >0){?>
<div id="content-container">
    <div id="button-container">
        <a href="mensagens.php">
            <button class="button-default">
                Mensagens
            </button>
        </a>
    </div>
    <div id="list-container">
    <table>
            <tr>
                <th>Nome</th>
                <th>Assunto</th>
                <th class="center">Visualizar</th>
                <th class="center">Arquivar</th>
            </tr>

            <?php while ($mensagem = mysqli_fetch_array($mensagens)) { ?>

                <tr>
                    <td><?= $mensagem['nome'] ?></td>
                    <td><?= $mensagem['assunto'] ?></td>
                    <td class="center"><a href="visualizar-mensagem.php?id=<?= $mensagem['id'] ?>">Visualizar</a></td>
                    <td class="center"><a href="arquivar-mensagem.php?id=<?= $mensagem['id'] ?>">Arquivar</a></td>
                </tr>

            <?php } ?>

        </table>
    </div>
</div>
<?php } else { ?>
    <div id="content-container">
    <div id="button-container">
        <a href="mensagens.php">
            <button class="button-default">
                Mensagens
            </button>
        </a>
    </div>
    <div id="list-container">
    <table>
            <tr>
                <th>Nome</th>
                <th>Assunto</th>
                <th class="center">Visualizar</th>
                <th class="center">Arquivar</th>
            </tr>

        </table>
    </div>
            <div id="content">
                    <h2 id="not-found">Não há mensagens em aberto!</h2>
            </div>
</div>
<?php } ?>