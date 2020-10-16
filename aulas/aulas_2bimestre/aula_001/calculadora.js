var num1 = document.getElementById('num1');
var num2 = document.getElementById('num2');
var operacao = document.getElementById('op');

var buttonElement =   document.querySelector('#app button');
buttonElement.addEventListener('click', calcular);

function calcular() {
  const n1 = parseInt(num1.value);
  const n2 = parseInt(num2.value);
  const op = operacao.value;

  if (op === '+') {
    alert(`A soma entre ${n1} e ${n2} é igual a ${n1+n2}`);
  } else if (op === '-') {
    alert(`A subtração entre ${n1} e ${n2} é igual a ${n1-n2}`);
  } else if (op === '*') {
    alert(`A multiplicação entre ${n1} e ${n2} é igual a ${n1*n2}`);
  } else if (op === '/') {
    alert(`A divisão entre ${n1} e ${n2} é igual a ${n1/n2}`);
  } else{ 
    alert('Type a valid operation!');
  }

  limpar();
}

function limpar() {
  num1.value = '';
  num2.value = '';
  operacao.value = '';
}