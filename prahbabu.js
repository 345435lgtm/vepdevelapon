const products = [
    { name: "Ноутбук", category: "Електроніка" },
    { name: "Смартфон", category: "Електроніка" },
    { name: "Кавоварка", category: "Побутова техніка" },
    { name: "Холодильник", category: "Побутова техніка" },
    { name: "Футболка", category: "Одяг" },
    { name: "Джинси", category: "Одяг" }
];
const groupedProducts = products.reduce((acc, product) => {
    if (!acc[product.category]) {
        acc[product.category] = [];
    }
    acc[product.category].push(product.name);
    return acc;
}, {});

for (const [category, items] of Object.entries(groupedProducts)) {
    console.log(`${category}:`);
    items.forEach(item => console.log(`  - ${item}`));
}
for (const [category, items] of Object.entries(groupedProducts)) {
    console.log(`${category}:`);
    items.forEach(item => console.log(`  - ${item}`));
}
