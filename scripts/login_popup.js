function showLoginPopup() {
    var popup = document.getElementById("loginPopup");
    popup.classList.add("show");
  }
  
  function hideLoginPopup() {
    var popup = document.getElementById("loginPopup");
    popup.classList.remove("show");
  }
  
  function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Verifica as credenciais
    if (username === "x" && password === "senha_x") {
      alert("Login bem-sucedido");
      hideLoginPopup();
    } else if (username === "y" && password === "senha_y") {
      alert("Login bem-sucedido");
      hideLoginPopup();
    } else {
      alert("Login inválido");
    }
  }
  
  document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Impede o envio do formulário
    login();
  });
  
  document.getElementById("loginRetry").addEventListener("click", function(event) {
    event.preventDefault(); // Impede o comportamento padrão do link
    login();
  });
  
  document.getElementById("loginCancel").addEventListener("click", function(event) {
    event.preventDefault(); // Impede o comportamento padrão do link
    hideLoginPopup();
  });