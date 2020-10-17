const display = document.querySelector('#display');
let num1 = '';
let num2= '';
let operacao = '';
let parte = 0;

function numero(num){
	if (display.value.search('=') >= 0) {
		display.value = '';
	}
	if (parte == 0) {
		num1 += num;
		console.log(num1);
	} else if (parte == 1) {
		num2 += num;
		console.log(num2);
	}
	display.value += num;
}

function selOpe(op) {
	if (parte == 0) {
		console.log(op);
		operacao = op;
		parte = 1;
	} else {
		console.log('nao op');
	}
	display.value += ` ${op} `;
}

function calcula() {
	if (parte == 1) {
		let total;
		console.log('calculei');
		num1 = Number(num1);
		num2 = Number(num2);
		switch(operacao) {
			case '+':
				total = new Intl.NumberFormat('pt-BR').format(num1 + num2);
				console.log(`${num1} + ${num2} = ${total}`);
			break;
			case '-':
				total = num1 - num2;
				console.log(`${num1} - ${num2} = ${total}`);
			break;
			case '*':
				total = num1 * num2;
				console.log(`${num1} * ${num2} = ${total}`);
			break;
			case '/':
				total = num1 / num2;
				console.log(`${num1} / ${num2} = ${total}`);
			break;
		}
		display.value += ` = ${total}`;
		parte = 0;
		num1 = '';
		num2 = '';
	} else {
		console.log('nao calculei');
	}
}
