<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="row d-flex justify-content-center">
      <div
        id="quadro1"
        class="col-md-4 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x1"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>

      <div
        id="quadro2"
        class="col-md-4 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x2"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>

      <div
        id="quadro3"
        class="col-md-4 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x3"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div
        id="quadro4"
        class="col-md-6 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x4"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>

      <div
        id="quadro5"
        class="col-md-6 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x5"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>

      <div
        id="quadro6"
        class="col-md-6 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x6"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center">
      <div
        id="quadro7"
        class="col-md-6 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x7"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>

      <div
        id="quadro8"
        class="col-md-6 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x8"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>

      <div
        id="quadro9"
        class="col-md-6 border"
        style="width: 200px; height: 200px"
      >
        <div
          id="x9"
          style="text-align: center; font-size: 150px; display: none"
        >
          X
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4"></div>
    </div>


<?php
include 'form.php';
?>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>

  <script>
    var jogador = "X";
    var jogada = 1;
    var jogo = 0;
    var combinacoes = [];
    var contc = 0;
    var confirmarBloco = 0;

    var bloco1 = 0;
    var bloco2 = 0;
    var bloco3 = 0;
    var bloco4 = 0;
    var bloco5 = 0;
    var bloco6 = 0;
    var bloco7 = 0;
    var bloco8 = 0;
    var bloco9 = 0;
    var code1 = "";

    var quadro1 = document.getElementById("quadro1");
    var x1 = document.getElementById("x1");
    var x2 = document.getElementById("x2");
    var x3 = document.getElementById("x3");
    var x4 = document.getElementById("x4");
    var x5 = document.getElementById("x5");
    var x6 = document.getElementById("x6");
    var x7 = document.getElementById("x7");
    var x8 = document.getElementById("x8");
    var x9 = document.getElementById("x9");
    var code = document.getElementById("code");

    quadro1.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro1.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro1.onclick = function () {
      if (bloco1 == 0) {
        x1.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 1;
        bloco1 = 1;
        console.log(bloco1);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 1;
        venceu();
        ia();
      }
    };

    var quadro2 = document.getElementById("quadro2");

    quadro2.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro2.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro2.onclick = function () {
      if (bloco2 == 0) {
        x2.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 2;
        bloco2 = 1;
        console.log(bloco2);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 2;
        venceu();
        ia();
      }
    };

    var quadro3 = document.getElementById("quadro3");

    quadro3.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro3.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro3.onclick = function () {
      if (bloco3 == 0) {
        x3.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 3;
        bloco3 = 1;
        console.log(bloco3);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 3;
        venceu();
        ia();
        venceu();
      }
    };

    var quadro4 = document.getElementById("quadro4");

    quadro4.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro4.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro4.onclick = function () {
      if (bloco4 == 0) {
        x4.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 4;
        bloco4 = 1;
        console.log(bloco4);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 4;
        venceu();
        ia();
      }
    };

    var quadro5 = document.getElementById("quadro5");

    quadro5.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro5.onmouseout = function () {
      this.style.background = "white";
    };

    quadro5.onclick = function () {
      if (bloco5 == 0) {
        x5.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 5;
        bloco5 = 1;
        console.log(bloco5);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 5;
        venceu();
        ia();
      }
    };

    var quadro6 = document.getElementById("quadro6");

    quadro6.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro6.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro6.onclick = function () {
      if (bloco6 == 0) {
        x6.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 6;
        bloco6 = 1;
        console.log(bloco6);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 6;
        venceu();
        ia();
      }
    };

    var quadro7 = document.getElementById("quadro7");

    quadro7.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro7.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro7.onclick = function () {
      if (bloco7 == 0) {
        x7.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 7;
        bloco7 = 1;
        console.log(bloco7);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 7;
        venceu();
        ia();
      }
    };

    var quadro8 = document.getElementById("quadro8");

    quadro8.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro8.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro8.onclick = function () {
      if (bloco8 == 0) {
        x8.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 8;
        bloco8 = 1;
        console.log(bloco8);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 8;
        venceu();
        ia();
      }
    };

    var quadro9 = document.getElementById("quadro9");

    quadro9.onmouseover = function () {
      if (jogo == 0) {
        this.style.background = "#E3E5FF";
      }
    };
    quadro9.onmouseout = function () {
      if (jogo == 0) {
        this.style.background = "white";
      }
    };

    quadro9.onclick = function () {
      if (bloco9 == 0) {
        x9.style.display = "block";
        console.log(
          "---------------------------------------------------------"
        );
        console.log("jogada : " + jogada);
        console.log("jogador marcou o " + jogador);
        code1 = code1 + jogada + jogador + 9;
        bloco9 = 1;
        console.log(bloco9);
        jogada = jogada + 1;
        jogador = "O";
        console.log(
          "---------------------------------------------------------"
        );
        confirmarBloco = 9;
        venceu();
        ia();
      }
    };

    function iaAleatorio() {
  var a = Math.floor(Math.random() * 9) + 1;
  document.getElementById("code1Atual").innerHTML = code1;
  pegarArrayComBaseNoCode();
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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
        iaAleatorio();
      }
      break; // Adicionado break aqui

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
      } else {
        iaAleatorio();
      }
      break; // Adicionado break aqui
  }
}

//ia
    function ia() {
      //var a = Math.floor(Math.random() * 9) + 1;
      document.getElementById("code1Atual").innerHTML = code1;
      pegarArrayComBaseNoCode();
      var a = parseInt(document.getElementById(`proximoMovimento`).innerHTML);
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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
            iaAleatorio();
          }
          break; // Adicionado break aqui

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
          } else {
            iaAleatorio();
          }
          break; // Adicionado break aqui
      }
    }

    function venceu() {
      if (
        bloco1 == 1 &&
        bloco2 == 1 &&
        bloco3 == 1 &&
        x1.innerHTML == "O" &&
        x2.innerHTML == "O" &&
        x3.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro1.style.background = "#98FB98";
        quadro2.style.background = "#98FB98";
        quadro3.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco1 == 1 &&
        bloco2 == 1 &&
        bloco3 == 1 &&
        x1.innerHTML == "\n          X\n        " &&
        x2.innerHTML == "\n          X\n        " &&
        x3.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro1.style.background = "#98FB98";
        quadro2.style.background = "#98FB98";
        quadro3.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      }

      if (
        bloco4 == 1 &&
        bloco5 == 1 &&
        bloco6 == 1 &&
        x4.innerHTML == "O" &&
        x5.innerHTML == "O" &&
        x6.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro4.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro6.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco4 == 1 &&
        bloco5 == 1 &&
        bloco6 == 1 &&
        x4.innerHTML == "\n          X\n        " &&
        x5.innerHTML == "\n          X\n        " &&
        x6.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro4.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro6.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco7 == 1 &&
        bloco8 == 1 &&
        bloco9 == 1 &&
        x7.innerHTML == "O" &&
        x8.innerHTML == "O" &&
        x9.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro7.style.background = "#98FB98";
        quadro8.style.background = "#98FB98";
        quadro9.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco7 == 1 &&
        bloco8 == 1 &&
        bloco9 == 1 &&
        x7.innerHTML == "\n          X\n        " &&
        x8.innerHTML == "\n          X\n        " &&
        x9.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro7.style.background = "#98FB98";
        quadro8.style.background = "#98FB98";
        quadro9.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco1 == 1 &&
        bloco4 == 1 &&
        bloco7 == 1 &&
        x1.innerHTML == "O" &&
        x4.innerHTML == "O" &&
        x7.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro1.style.background = "#98FB98";
        quadro4.style.background = "#98FB98";
        quadro7.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco1 == 1 &&
        bloco4 == 1 &&
        bloco7 == 1 &&
        x1.innerHTML == "\n          X\n        " &&
        x4.innerHTML == "\n          X\n        " &&
        x7.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro1.style.background = "#98FB98";
        quadro4.style.background = "#98FB98";
        quadro7.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco2 == 1 &&
        bloco5 == 1 &&
        bloco8 == 1 &&
        x2.innerHTML == "O" &&
        x5.innerHTML == "O" &&
        x8.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro2.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro8.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco2 == 1 &&
        bloco5 == 1 &&
        bloco8 == 1 &&
        x2.innerHTML == "\n          X\n        " &&
        x5.innerHTML == "\n          X\n        " &&
        x8.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro2.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro8.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco3 == 1 &&
        bloco6 == 1 &&
        bloco9 == 1 &&
        x3.innerHTML == "O" &&
        x6.innerHTML == "O" &&
        x9.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro3.style.background = "#98FB98";
        quadro6.style.background = "#98FB98";
        quadro9.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco3 == 1 &&
        bloco6 == 1 &&
        bloco9 == 1 &&
        x3.innerHTML == "\n          X\n        " &&
        x6.innerHTML == "\n          X\n        " &&
        x9.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro3.style.background = "#98FB98";
        quadro6.style.background = "#98FB98";
        quadro9.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco2 == 1 &&
        bloco5 == 1 &&
        bloco8 == 1 &&
        x2.innerHTML == "O" &&
        x5.innerHTML == "O" &&
        x8.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro2.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro8.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco3 == 1 &&
        bloco5 == 1 &&
        bloco7 == 1 &&
        x3.innerHTML == "O" &&
        x5.innerHTML == "O" &&
        x7.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro3.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro7.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco3 == 1 &&
        bloco5 == 1 &&
        bloco7 == 1 &&
        x3.innerHTML == "\n          X\n        " &&
        x5.innerHTML == "\n          X\n        " &&
        x7.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro3.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro7.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco1 == 1 &&
        bloco5 == 1 &&
        bloco9 == 1 &&
        x1.innerHTML == "O" &&
        x5.innerHTML == "O" &&
        x9.innerHTML == "O" &&
        jogo == 0
      ) {
        quadro1.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro9.style.background = "#98FB98";
        console.log("O venceu");
        jogo = 1;
        code1 = code1 + "OV";
        setTimeout(msgEncerramento, 100);
      } else if (
        bloco1 == 1 &&
        bloco5 == 1 &&
        bloco9 == 1 &&
        x1.innerHTML == "\n          X\n        " &&
        x5.innerHTML == "\n          X\n        " &&
        x9.innerHTML == "\n          X\n        " &&
        jogo == 0
      ) {
        quadro1.style.background = "#98FB98";
        quadro5.style.background = "#98FB98";
        quadro9.style.background = "#98FB98";
        console.log("X venceu");
        jogo = 1;
        code1 = code1 + "XV";
        setTimeout(msgEncerramento, 100);
      }
    }

    function msgEncerramento() {
          alert("FIM DE JOGO; CODE : " + code1);
          adicionarCodeForm();
          //location.reload();
 
    }

    function adicionarCodeForm(){
        document.getElementById("inputCode1").value = code1;
        document.getElementById("botaoCodeForm").click();
      }
      
  </script>
  <script src="adicionarSequenciasArray.js"></script>
  <script src="pegarArrayComBaseNoCode.js"></script>
</html>
