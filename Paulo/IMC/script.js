document.getElementById("calculo").addEventListener("click", function(event) {
    // Evita o comportamento padrão de envio do formulário
    event.preventDefault();

    // Obtém os valores do formulário
    const nome = document.getElementById("nome").value;
    const peso = parseFloat(document.getElementById("peso").value);
    const altura = parseFloat(document.getElementById("altura").value);

    // Valida os valores inseridos
    if (!nome || isNaN(peso) || isNaN(altura) || peso <= 0 || altura <= 0) {
        document.getElementById("resultado").innerText = "Por favor, preencha todos os campos corretamente.";
        return;
    }

    // Calcula o IMC
    const imc = (peso / (altura * altura)).toFixed(2);

    // Define a classificação do IMC
    let classificacao = "";
    if (imc < 18.5) {
        classificacao = "abaixo do peso.";
    } else if (imc < 25) {
        classificacao = "com peso normal.";
    } else if (imc < 30) {
        classificacao = "com sobrepeso.";
    } else {
        classificacao = "com obesidade.";
    }

    // Exibe o resultado
    document.getElementById("resultado").innerText = `${nome}, seu IMC é ${imc} e você está ${classificacao}`;
});
