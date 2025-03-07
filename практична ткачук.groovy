document.addEventListener('DOMContentLoaded', function() {
    displayHistory();
});
function calculate(op) {
    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);
    let result;
    
      if (isNaN(num1) || isNaN(num2)) {
        alert('Будь ласка, введіть коректні числа!');
        return;
    }
    
    switch (op) {
        case '+':
            result = num1 + num2;
            break;
        case '-':
            result = num1 - num2;
            break;
        case '*':
            result = num1 * num2;
            break;
        case '/':
            if (num2 === 0) {
                alert('Помилка: ділення на нуль!');
                return;
            } else {
                result = num1 / num2;
            }
            break;
        case '%':
            if (num2 === 0) {
                alert('Помилка: ділення на нуль!');
                return;
            } else {
                result = num1 % num2;
            }
            break;
        case '^':
            result = Math.pow(num1, num2);
            break;
        default:
            alert('Невідома операція!');
            return;
    }
    
    document.getElementById('result').innerText = result;
   (`${num1} ${op} ${num2} = ${result}`);
}

function calculateRoot() {
    let num = parseFloat(document.getElementById('num1').value);
    if (isNaN(num)) {
        alert('Будь ласка, введіть число для обчислення кореня!');
        return;
    }
    if (num < 0) {
        alert('Помилка: неможливо обчислити корінь з від’ємного числа!');
        return;
    }
    let result = Math.sqrt(num);
    document.getElementById('result').innerText = result;
    saveHistory(`√${num} = ${result}`);
}

function saveHistory(entry) {
    let history = JSON.parse(localStorage.getItem('calcHistory')) || [];
    history.push(entry);
    localStorage.setItem('calcHistory', JSON.stringify(history));
    displayHistory();
}

function displayHistory() {
    let history = JSON.parse(localStorage.getItem('calcHistory')) || [];
    let historyBlock = document.getElementById('history');
    historyBlock.innerHTML = '';
    history.forEach(function(entry) {
        let p = document.createElement('p');
        p.textContent = entry;
        historyBlock.appendChild(p);
    });
}

function clearHistory() {
    localStorage.removeItem('calcHistory');
    displayHistory();
}

