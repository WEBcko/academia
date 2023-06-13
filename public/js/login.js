function showForm() {
  document.getElementById("login-form").style.display = "none";
  document.getElementById("cadastro-form").style.display = "block";
}
document.getElementById("botao-cadastrar").addEventListener("click", function(event) {
  event.preventDefault(); // Impede o comportamento padrão do botão
  showForm();
});




