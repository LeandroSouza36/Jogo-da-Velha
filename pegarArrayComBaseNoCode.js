function pegarArrayComBaseNoCode() {
  const result = array.filter((item) => item.startsWith(code1));
  console.log("PRÓXIMA : " + result[0]);
  console.log(result.length);
  document.getElementById(`chancesDeGanhar`).innerHTML = result.length;

  // Verifica se 'result' e 'code1' são strings
  if (typeof result[0] === "string" && typeof code1 === "string") {
    // Filtra os caracteres que estão em posições diferentes ou que não existem em code1
    const diff = result[0]
      .split("")
      .filter((char, index) => code1[index] !== char)
      .join("");
    console.log("DIFERENÇA : " + diff); // Retorna a diferença

    let primeiroCaractere = diff.charAt(0); // Ou str[0]
    console.log("PRÓXIMO MOVIMENTO :" + primeiroCaractere);
    document.getElementById(`proximoMovimento`).innerHTML = primeiroCaractere;
  } else {
    console.log("Erro: result e code1 devem ser strings");
  }
}
