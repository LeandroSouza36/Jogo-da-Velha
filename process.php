<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputCode1 = htmlspecialchars(trim($_POST['inputCode1']));
    $indice = isset($_POST['indice']) && $_POST['indice'] !== '' ? (int)$_POST['indice'] : null;

    $dados_usuario = "$inputCode1\n";

    $registros = file('registros.txt', FILE_IGNORE_NEW_LINES);

    if ($indice !== null && isset($registros[$indice])) {
        // Editando um registro existente
        $registros[$indice] = trim($dados_usuario);
    } else {
        // Novo registro
        $registros[] = trim($dados_usuario);
    }

    file_put_contents('registros.txt', implode("\n", $registros));

    echo "<h2>Dados salvos com sucesso!</h2>";
    echo "<a href='menu.html'>Voltar ao Menu</a>";

    // Redireciona para outra página
    header("Location: index.php");
    exit();

} else {
    echo "Método de requisição inválido.";
}


?>