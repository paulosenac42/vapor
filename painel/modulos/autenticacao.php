<?php 
session_start();

$administrador = $_SESSION['administrador'] ?? null;

if ($administrador == null) {
    header('location: index.php?error=Você deve fazer login');
}

?>