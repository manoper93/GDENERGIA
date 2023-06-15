//

var loginContainer = document.getElementsByClassName("login-container")[0];

console.log("LOGS");
console.log("login-container >>", { loginContainer });

var showOrHideLogin = () => {
  var currentVisibility = loginContainer.style.display;

  console.log("login-container >>", {
    loginContainer,
    currentVisibility,
  });

  loginContainer.style.display = currentVisibility === "none" ? "flex" : "none";
};

// login form data

// REF para o form
const loginForm = document.getElementById("loginForm");
// ref para input email do login
const logemail = document.getElementById("email");
// ref para input password do login
const logpass = document.getElementById("senha");

const loginText = document.getElementById("loginText");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  var formData = new FormData(e.target);

  var loginEmail = formData.get("email") || "";
  var loginPass = formData.get("senha") || "";

  if (loginEmail.length === 0) {
    // email está vazio
    logemail.style.border = "solid red 2px";

    alert("Introduza o email por favor");
  } else {
    logemail.style.border = "unset";
  }

  if (loginPass.length === 0) {
    // password está vazia
    logpass.style.border = "solid red 2px";

    alert("Introduza a password por favor");
  } else {
    logpass.style.border = "unset";
  }

  // if (loginEmail.length > 0 && loginPass.length > 0) {
  //   // TUDO OK - POSSO FAZER CHAMADA DA BASE DADOS

  //   // MUDA O TEXTO DO LOGIN
  //   loginText.innerText = "Olá, " + loginEmail;

  //   // ESCONDE O LOGIN
  //   showOrHideLogin();
  // }

  console.log("LOG > FORM > values", {
    loginEmail,
    loginPass,
  });
});
