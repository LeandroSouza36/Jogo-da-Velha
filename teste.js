function ia() {
  var a = "";
  a = Math.floor(Math.random() * 9) + 1;
  switch (a) {
    case 1:
      if (bloco1 == 0) {
        x1.style.display = "block";
        x1.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 1");
        code1 = code1 + jogada + jogador + 1;
        bloco1 = 1;
        console.log(bloco1);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 2:
      if (bloco2 == 0) {
        x2.style.display = "block";
        x2.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 2");
        code1 = code1 + jogada + jogador + 2;
        bloco2 = 1;
        console.log(bloco2);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 3:
      if (bloco3 == 0) {
        x3.style.display = "block";
        x3.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 3");
        code1 = code1 + jogada + jogador + 3;
        bloco3 = 1;
        console.log(bloco3);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 4:
      if (bloco4 == 0) {
        x4.style.display = "block";
        x4.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 4");
        code1 = code1 + jogada + jogador + 4;
        bloco4 = 1;
        console.log(bloco4);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 5:
      if (bloco5 == 0) {
        x5.style.display = "block";
        x5.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 5");
        code1 = code1 + jogada + jogador + 5;
        bloco5 = 1;
        console.log(bloco5);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 6:
      if (bloco6 == 0) {
        x6.style.display = "block";
        x6.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 6");
        code1 = code1 + jogada + jogador + 6;
        bloco6 = 1;
        console.log(bloco6);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 7:
      if (bloco7 == 0) {
        x7.style.display = "block";
        x7.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 7");
        code1 = code1 + jogada + jogador + 7;
        bloco7 = 1;
        console.log(bloco7);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 8:
      if (bloco8 == 0) {
        x8.style.display = "block";
        x8.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 8");
        code1 = code1 + jogada + jogador + 8;
        bloco8 = 1;
        console.log(bloco8);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      } else {
        iajogada();
      }
    case 9:
      if (bloco9 == 0) {
        x9.style.display = "block";
        x9.innerHTML = "O";

        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador + " no bloco 9");
        code1 = code1 + jogada + jogador + 9;
        bloco9 = 1;
        console.log(bloco9);
        jogada = jogada + 1;
        jogador = "X";
        console.log("sua vez");
        console.log(
          "---------------------------------------------------------"
        );
        venceu();
      }
      break;
  }
}
