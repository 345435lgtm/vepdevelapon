let number = promt("введіть число:")
number = Number(number);
for (let i = 2; i <= number; i++) {
  if (i % 2 === 0) {
	console.log(i);
  }
}