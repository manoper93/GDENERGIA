// Criação do botão
var botao = document.createElement('button');
botao.innerText = 'Texto do Botão';

// Estilização do botão
botao.style.display = 'block'; // Define a exibição como 'block'

// Função para alternar a ocultação do botão
function alternarOcultacao() {
  if (botao.style.display === 'none') {
    botao.style.display = 'block'; // Mostra o botão
  } else {
    botao.style.display = 'none'; // Oculta o botão
  }
}

// Adiciona o botão ao container
var container = document.getElementById('botaoContainer');
container.appendChild(botao);

// Adiciona um ouvinte de evento para o clique do botão
botao.addEventListener('click', alternarOcultacao);
