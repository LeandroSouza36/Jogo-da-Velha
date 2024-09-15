class QLearningTicTacToe {
  constructor() {
    this.qTable = {}; // Tabela Q armazenando os valores
    this.learningRate = 0.1; // Taxa de aprendizado
    this.discountFactor = 0.95; // Fator de desconto
    this.explorationRate = 1; // Taxa de exploração (inicialmente explorando)
    this.explorationDecay = 0.99; // Decaimento da exploração
  }

  // Inicializa o tabuleiro vazio
  createBoard() {
    return Array(9).fill(null);
  }

  // Checa se há um vencedor
  checkWinner(board) {
    const winPatterns = [
      [0, 1, 2],
      [3, 4, 5],
      [6, 7, 8], // Linhas
      [0, 3, 6],
      [1, 4, 7],
      [2, 5, 8], // Colunas
      [0, 4, 8],
      [2, 4, 6], // Diagonais
    ];

    for (let pattern of winPatterns) {
      const [a, b, c] = pattern;
      if (board[a] && board[a] === board[b] && board[a] === board[c]) {
        return board[a]; // Retorna o vencedor ('X' ou 'O')
      }
    }

    return board.includes(null) ? null : "draw"; // 'draw' para empate
  }

  // Gera uma string única para o estado do tabuleiro
  getBoardKey(board) {
    return board.map((cell) => cell || "-").join("");
  }

  // Escolhe a próxima jogada com base na tabela Q
  chooseAction(board, availableActions) {
    const boardKey = this.getBoardKey(board);

    // Exploração vs Exploração
    if (Math.random() < this.explorationRate) {
      return availableActions[
        Math.floor(Math.random() * availableActions.length)
      ]; // Exploração
    }

    // Exploração: Escolhe a ação com maior valor Q
    let maxQValue = -Infinity;
    let bestAction = null;

    for (let action of availableActions) {
      const qValue = this.qTable[`${boardKey}:${action}`] || 0;
      if (qValue > maxQValue) {
        maxQValue = qValue;
        bestAction = action;
      }
    }

    return (
      bestAction ||
      availableActions[Math.floor(Math.random() * availableActions.length)]
    );
  }

  // Atualiza a tabela Q
  updateQTable(board, action, reward, nextBoard) {
    const boardKey = this.getBoardKey(board);
    const nextBoardKey = this.getBoardKey(nextBoard);

    const currentQ = this.qTable[`${boardKey}:${action}`] || 0;
    const maxFutureQ =
      Math.max(...Object.values(this.qTable).filter((q) => q !== undefined)) ||
      0;

    // Fórmula Q-Learning
    this.qTable[`${boardKey}:${action}`] =
      currentQ +
      this.learningRate *
        (reward + this.discountFactor * maxFutureQ - currentQ);
  }

  // Executa o jogo de treino
  playTrainingGame() {
    let board = this.createBoard();
    let player = "X";

    while (true) {
      const availableActions = board
        .map((cell, index) => (cell === null ? index : null))
        .filter((i) => i !== null);
      const action = this.chooseAction(board, availableActions);
      board[action] = player;

      const winner = this.checkWinner(board);
      if (winner) {
        const reward = winner === "X" ? 1 : winner === "O" ? -1 : 0;
        this.updateQTable(board, action, reward, board);
        break;
      }

      const nextPlayer = player === "X" ? "O" : "X";
      this.updateQTable(board, action, 0, board);
      player = nextPlayer;
    }

    // Decai a taxa de exploração para explorar menos à medida que aprende
    this.explorationRate *= this.explorationDecay;
  }
}

// Cria a instância do aprendizado
const qLearningTicTacToe = new QLearningTicTacToe();

// Treina o algoritmo com várias partidas
for (let i = 0; i < 10000; i++) {
  qLearningTicTacToe.playTrainingGame();
}

console.log("Treinamento concluído!");
