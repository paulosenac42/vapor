<?php 

require('./modulos/conexao.php');

$email = $_POST['email'] ?? null;
$senha = $_POST['password'] ?? null;

$query_adm = "SELECT nome, id, cpf FROM administrador WHERE email = '{$email}' AND senha = '{$senha}'";


$administrador = mysqli_fetch_assoc(mysqli_query($conn, $query_adm));


if ($administrador == null) {
   header('location: index.php?error=Usuário e/ou senha inválidos');
} else {
    session_start();
    $_SESSION['administrador'] = $administrador;
    header('location: dashboard.php');
}

?>