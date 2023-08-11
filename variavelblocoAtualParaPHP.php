<?php
// Receba o valor do JavaScript através do POST
$valorPHP = $_POST['valor'];

// Agora você pode usar a variável $valorPHP no seu código PHP
echo "Valor recebido do JavaScript: " . $valorPHP;

session_start(); // Inicia a sessão ou retoma a sessão existente

// Define a variável da sessão
$_SESSION['variavel'] = $valorPHP;
?>

