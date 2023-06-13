// Criação do botão
var botao = document.createElement('button');
botao.innerText = 'Sobre Nós';

// Estilização do botão
botao.style.display = 'block'; // Define a exibição como 'block'
botao.style.backgroundColor = 'white';
botao.style.borderRadius = '10px';
// Função para alternar a ocultação do botão
function alternarOcultacao() {
  if (botao.style.display === 'none') {
    botao.style.display = 'block'; // Mostra o botão
  } else {
    botao.style.display = 'none'; // Oculta o botão~
    // Redirecionar para a página.html
    window.location.href = 'contacto.html';
  }
}

// Adiciona o botão ao container
var container = document.getElementById('botaoContainer');
container.appendChild(botao);

// Adiciona um ouvinte de evento para o clique do botão
botao.addEventListener('click', alternarOcultacao);
