let nums = [1, 2, 3, 4, 5];
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];


// foreach
// numbers.forEach(function(value, index, arr){
//     console.log('Значение:'+ value);
//     console.log('Ключ:'+ index);
//     console.log('Массив:', arr);
// });

// numbers.forEach(function(value, index){
//     console.log(value + index);
// })

// numbers.forEach((value, index) => {
//     //console.log('Сумма значения и индекса: ' + (value + index) );
//     console.log( `Сумма значения и индекса: ${value + index}` );
// });

// let res = 0;
// nums.forEach(function(num){
//     res += num;
// });
// console.log(res);

// let newArr = [];
// nums.forEach(function(num){
//     newArr.push(num * 2);
// });
// console.log(newArr);

// map
// let newFruits = fruits.map(function(fruit){
//     return `<li>${fruit}</li>`;
// });

// console.log(fruits);
// console.log(newFruits);

// let newAnimals = animals.map(function(animals){
//     return `<h2>${animals}</h2>`;
// });

// console.log(newAnimals);

// let newAnimals = animals.map(function(item){
//     return `<h3>${item}</h3>`;
// });
// console.log(animals);
// console.log(newAnimals);


// let newArr = nums.map(function(num){
//     return num * 2;
// });
// console.log(newArr);

let newArr = nums.map(num => num * 2);
console.log(newArr);
