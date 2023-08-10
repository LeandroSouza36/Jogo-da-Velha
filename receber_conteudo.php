<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["conteudo"])) {
    $conteudoRecebido = $_POST["conteudo"];

    include("conexao.php");
    $sql = "INSERT INTO movimentos (movimento) VALUES ('$conteudoRecebido')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $conteudoRecebido);
    if ($stmt->execute()) {
        echo "Conteúdo armazenado no banco de dados.";
    } else {
        echo "Erro ao armazenar conteúdo: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    // Agora você pode manipular $conteudoRecebido no PHP como quiser.
    // Por exemplo, você pode armazená-lo em um banco de dados, gravar em um arquivo, etc.


}
?>