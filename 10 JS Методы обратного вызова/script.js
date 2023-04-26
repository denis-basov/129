// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];


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

// let newArr = nums.map(num => num * 2);
// console.log(newArr);
/*
str_1= '45';
str_2= '20';
console.log ("Вычитание ");
console.log (str_1 - str_2);

str_1= '45';
str_2= '20';
console.log ("Умножение ");
console.log (str_1 * str_2);

str_1= '45';
str_2= '20';
console.log ("Деление ");
console.log (str_1 / str_2);

str_1= ('45');
str_2= ('20');
console.log ("Сумма ");
console.log (+str_1 + +str_2);*/

let users = [
    {
        userName: 'Ivan999',
        firstName: 'Ivan',
        lastName: 'Ivanov',
        age: 11,
        phones: ['911', '01', '9874'],
    },
    {
        userName: 'Anna123',
        firstName: 'Anna',
        lastName: 'Ivanova',
        age: 13,
        phones: ['456', '04', '546221'],
    },
    {
        userName: 'Sergey19',
        firstName: 'Sergey',
        lastName: 'Petrov',
        age: 33,
        phones: ['2345', '3423', '345234'],
    },
    {
        userName: 'Irina111',
        firstName: 'Irina',
        lastName: 'Petrova',
        age: 42,
        phones: ['231234', '78434', '65654323'],
    },
];

// получаем массив userName
// let userNames = users.map(function(user){
//     return user.userName;
// });
// console.log(userNames);

// let fullNames = users.map(function(user){
//     return `${user.firstName} ${user.lastName}`;
// });
// console.log(fullNames);

// let data = users.map(function(user){
//     return `Пользователь: ${user.firstName} ${user.lastName} Возраст: ${user.age} Логин: ${user.userName}`;
// });
// console.log(data);

// let userDescription = users.map(user => {
//     return `<p>Hi, my name is ${user.firstName} ${user.lastName}. I am ${user.age}. If you wanna chat, you can find me by my nickname ${user.userName} ! Or you can call me directly ${user.phones[0]} or ${user.phones[1]} . See you ;)!</p>`;
//     });
//     console.log(userDescription);

// const description = users.map(item => {
//     return `Юзернейм - ${item.userName}. Имя - ${item.firstName}. Фамилия - ${item.lastName}. Возраст - ${item.age}. Телефоны - ${item.phones.join('; ')}.`
// });
// console.log(description);

// const description = users.map(item => {
//     return `Юзернейм - ${item.userName}. Имя - ${item.firstName}. Фамилия - ${item.lastName}. Возраст - ${item.age}. Телефоны - ${item.phones.join('; ')}.`
// }).join('');
// console.log(description);

// let getSum = function(num1, num2){
//     return num1 + num2;
// }
// let getSum = (num1, num2) => {
//     return num1 + num2;
// };
// console.log( getSum(4,7) );

// let getHello = (hello) => {
//     return `user, ${hello}`;
// }
// console.log(getHello('hi'));

// let greet = function(user){
//     return `<p>Hello, ${user}</p>`;
// }
// let greet = user => `<p>Hello, ${user}</p>`;
// console.log( greet('Ivan') );


// let data = users.map(function(user){
//     return `Пользователь: ${user.firstName} ${user.lastName}`;
// });
// console.log(data);

/*
//let data = users.map => `Пользователь: ${user.firstName} ${user.lastName}`;
let data = users.map(user => `<li>Пользователь: ${user.firstName} ${user.lastName}</li>`).join('');
// let ul = document.querySelector('.users');
console.log(ul);
// ul.insertAdjacentHTML('beforeend', data);
document.querySelector('.users').insertAdjacentHTML('beforeend', data);*/


let nums = [1, 2, 3, 4, 5];
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];

// find
// let res = random.find(function(item){
//     return item > 0;
// });
// console.log(res);

// let user = users.find(function(user){
//     return user.age > 20;
// });
// console.log(user);
// let user = users.find(user=>user.age > 20);

// filter
// let res = pets.filter(function(pet){
//     return pet[0] === 'c';
// });
// console.log(res);

// let filNum = numbers.filter( number => number % 2 === 0 );
// console.log(filNum);

// let filUsers = users.filter(function(user){
//     return user.age > 20; 
// });
// console.log(filUsers);

// let str = 'hello!!!';
// console.log(str.length);// 8
// console.log(str[7]);// 7


// every
// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let array1 = [1, 30, 39, 29, 10, 13];
/*
// 1.
let isBelowThreshold =  function(value){
    return value < 40;
}
console.log( array1.every(isBelowThreshold) );
console.log( numbers.every(isBelowThreshold) );
console.log( nums.every(isBelowThreshold) );


// 2.
console.log( array1.every( function(value){
    return value < 40;
} ) );
console.log( numbers.every(  function(value){
    return value < 40;
} ) );
console.log( nums.every(  function(value){
    return value < 40;
} ) );*/

// some
// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// let res = fruits.some(function(fruit){
//     return fruit.toLowerCase() === 'кокос';
// });
// console.log(res);

// let str = 'HeLlO';
// console.log( str.toLowerCase() );

/*
function returnArray(){
    let str1 = 'hello';
    let str2 = 'summer';
    return {string1:str1, string2:str2};
}

console.log( returnArray() );*/

// reduce
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let res = numbers.reduce(function(acc, num){
//     console.log(acc, num);
//     return acc + num;
// });
//console.log(res);