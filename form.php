<form action="process.php" method="POST" style="">

      <label for="inputCode1">ENVIAR REGISTRO:</label>
      <input type="text" id="inputCode1" name="inputCode1" required />

      <input type="submit" id="botaoCodeForm" value="Enviar" />
</form>





<h1 id="code1Atual">ddd</h1>
<?php
$cont = 0;
            // Caminho para o arquivo .txt
            $arquivo = 'registros.txt';

            // Lê todo o conteúdo do arquivo
            $conteudo = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Percorre as linhas do arquivo
            foreach ($conteudo as $linha) {
                // Verifica se a linha começa com "ascd" e contém "XV"
                if (strpos($linha, 'XV') !== false) {
                  echo "<br><h5>SEQUENCIA ". $cont ." :</h5><br>";
                  echo "<h1 id'sequencia". $cont . "'>\n";
                  echo $linha;
                  echo "</h1";
                  $cont++;

                };
            };
        ?>
