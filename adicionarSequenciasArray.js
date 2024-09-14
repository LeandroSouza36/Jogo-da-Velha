let array = [];
let valorCont = document.getElementById(`cont`).innerHTML;
for (let i = 0; i < valorCont; i++) {
  let colocarSequenciaArray = document.getElementById(
    `sequencia${i}`
  ).innerHTML;
  array.push(colocarSequenciaArray);
}

console.log(array);
