<?php 

$error_message = $_GET['error'] ?? null;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="public/icons/favicon.ico" type="image/x-icon">
    <title>Vapor - Admnistrador - Login</title>
</head>

<body>
    <div class="container">
        <div id="form-login">
            <form action="./login.php" method="POST">
                <img src="./public/images/logo.png" alt="Logo" width="100px">
                <div class="coluna-login">
                    <div class="input">
                        <input placeholder="E-mail" type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="coluna-login">
                    <div class="input">
                        <input placeholder="Senha" type="password" name="password" id="password" required>
                    </div>
                </div>
                <button class="button-default" type="submit">Entrar</button>

                <?php if($error_message != null) { ?>
                    <div class="error-message"><?=$error_message?></div>
                <?php } ?>
            </form>
        </div>
    </div>
</body>

</html>