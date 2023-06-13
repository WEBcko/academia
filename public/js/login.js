var botao = document.getElementById("botao-cadastrar");

function toggleDivs() {
    var div2 = document.getElementById("cadastro-form");
    var div1 = document.getElementById("login-form");

    if (div1.style.display === 'block') {
        div1.style.display = 'none';
        div2.style.display = 'block';
      } else {
        div1.style.display = 'block';
        div2.style.display = 'none';
      }

      console.log("iasvgdbasd");

    // div1.classList.toggle("hide");
    // div2.classList.toggle("hide");
}
function showForm() {
  document.getElementById("login-form").style.display = "none";
  document.getElementById("cadastro-form").style.display = "block";
  slideToRegister();
}
document.getElementById("botao-cadastrar").addEventListener("click", function(event) {
  event.preventDefault(); // Impede o comportamento padrão do botão
  showForm();
});

  function slideToRegister() {
    var loginForm = document.querySelector('.login-form');
    var registerForm = document.querySelector('.cadastro-form');

    loginForm.style.transform = 'translateX(-100%)';
    registerForm.style.transform = 'translateX(0)';
  }

  function slideToLogin() {
    var loginForm = document.querySelector('.login-form');
    var registerForm = document.querySelector('.cadastro-form');

    loginForm.style.transform = 'translateX(0)';
    registerForm.style.transform = 'translateX(100%)';
  }



