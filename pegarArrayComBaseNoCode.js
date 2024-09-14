function pegarArrayComBaseNoCode() {
  const result = array.filter((item) => item.startsWith(code1));
  console.log(result);
  console.log(result.length);
  document.getElementById(`chancesDeGanhar`).innerHTML = result.length;
}
