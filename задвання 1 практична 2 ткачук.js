function checkAge() {
let age = prompt("Ведіть ваш вік")
age = Number(age);
if (age < 18) {
  alert("вам забороненно вхі");
} else if(age >=18 && age <= 65) {
  alert("ласкаво просимо");
} else if (age > 65) {
  alert("будь ласка будьте обережні");
}