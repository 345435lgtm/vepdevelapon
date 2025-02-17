let num1 = Number(prompt("ведіть перше число:"));
let num2 = Number(prompt("ведіть друге число:"));
let operation = prompt("ведіть операцію (+, -, *, /):");
let result;
switch (operation) {
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
      alert("ділення на нуль неможливе");
    } else {
      result = num1 / num2;
    }
    break;
  default:
    alert("невідома операція");
    break;
}
if (result !== undefined) {
  alert("результат: " + result);
}
