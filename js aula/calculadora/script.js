function soma() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 + num2;
    document.getElementById("result").innerText = "Resultado: " + resultado;
  }

  function subtracao() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 - num2;
    document.getElementById("result").innerText = "Resultado: " + resultado;
  }

  function multiplicacao() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);
    let resultado = num1 * num2;
    document.getElementById("result").innerText = "Resultado: " + resultado;
  }

  function divisao() {
    let num1 = parseFloat(document.getElementById("num1").value);
    let num2 = parseFloat(document.getElementById("num2").value);

    if (num2 === 0) {
      alert("Não é possível dividir por zero!");
    } else {
      let resultado = num1 / num2;
      document.getElementById("result").innerText =
        "Resultado: " + resultado;
    }
    
  }