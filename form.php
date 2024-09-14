<form action="process.php" method="POST" style="">

      <label for="inputCode1">ENVIAR REGISTRO:</label>
      <input type="text" id="inputCode1" name="inputCode1" required />

      <input type="submit" id="botaoCodeForm" value="Enviar" />
</form>




<h5>CAMINHO ATUAL : </h5>
<h5 id="code1Atual">0</h5>

<h5>CAMINHOS PARA ADVERSARIO GANHAR : </h5>
<h5 id="chancesDeGanhar">0</h5>
<?php
$cont = 0;
            // Caminho para o arquivo .txt
            $arquivo = 'registros.txt';

            // Lê todo o conteúdo do arquivo
            $conteudo = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Percorre as linhas do arquivo
            foreach ($conteudo as $linha) {
                // Verifica se a linha começa com "ascd" e contém "XV"
                if (strpos($linha, 'OV') !== false) {
                  echo "<div style='display:none'>";
                  echo "<br><h5>SEQUENCIA ". $cont ." :</h5><br>";
                  echo "<h1 id='sequencia". $cont . "'>";
                  echo $linha;
                  echo "</h1>\n";
                  echo "</div>";
                  $cont++;

                };
            };
echo "<h1 id='cont' style='display:none'>$cont</h1>\n";

        ?>
