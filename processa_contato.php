document.getElementById("form-contato").addEventListener("submit", function(event) {
    event.preventDefault(); // Previne o envio padrão do formulário
    
    // Coleta os valores dos campos
    var nome = document.getElementById("nome").value;
    var email = document.getElementById("email").value;
    var mensagem = document.getElementById("mensagem").value;
    
    // Exibe os valores na página
    document.getElementById("resposta").innerHTML = "<p><strong>Nome:</strong> " + nome + "</p>" +
                                                       "<p><strong>Email:</strong> " + email + "</p>" +
                                                       "<p><strong>Mensagem:</strong> " + mensagem + "</p>";
});