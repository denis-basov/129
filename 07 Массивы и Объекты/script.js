// let students = [];
// let nums = [1, 2, 3, 4, 5];
// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22, true];
// let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];

//console.log(students);
//console.log(numbers);
//console.log(random);

//console.log( numbers[8] ); // 5
//console.log( numbers.length ); // 11
//console.log( numbers.length - 1 ); // 10
//console.log( numbers[numbers.length - 1]);

//let str = `Мой любимый фрукт - ${fruits[5]}, а еще я люблю ${fruits[3]}`;
//console.log(str);

// let str = `у меня есть ${pets[1]} она ест ${fruits[5]}`;
// console.log(str);

// let str = `My ${pets[1]} like ${fruits[4]} bi I like only ${fruits[0]}`;
// console.log(str);

// let str = `У меня дома живет ${pets[0]}, а еще ${pets[1]} и ${pets[3]}`;
// console.log(str);

// let str = `This ${pets[0]}, caught a ${animals[3]}`;
// console.log(str);

// fruits[3] = 'Арбуз';
// console.log(fruits);
// console.log(animals);
// console.log(students);
//let testStr = `<ul><li>${fruits.join("</li><li>")}</li></ul>`;
/*
<li>Киви</li><li>Ананас</li><li>Кокос</li>
*/
//document.write(testStr );

// удаление последнего элемента array.pop()
// console.log(fruits);

// let lastEl = fruits.pop();
// console.log(lastEl);
// console.log(fruits);

// добавление элемента в конец массива array.push(el1, el2, ... elN)
// "pigs", "goats", "sheep", "cows", "chickens", "cats", "dogs"
// let newLength = animals.push("pigs", "goats", "sheep", "cows", "chickens");
// console.log(newLength);
// console.log(animals);

// let pets = ['cat', 'dog', 'bat', 'mouse'];
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant'];
// переместите элемент 'elephant' в конец массива pets

// 1. Вырезаем элемент 'elephant' из массива animals и сохраняем в переменную
//let lastEl = animals.pop();
//console.log(lastEl);
// 2. Добавляем сохраненный ранее элеммент в конец массива pets
//pets.push(lastEl);
//pets.push(animals[animals.length - 1]);
//console.log(pets);

// в одну строку
//pets.push( animals.pop() );
//console.log(pets);


// удаление элемента с начала массива arr.shift()
// console.log(animals);
// let firstEl = animals.shift();
// console.log(firstEl);
// console.log(animals);

// добавление элемента в начало массива arr.unshift(el1, el2, ... elN)
// "pigs", "goats", "sheep", "cows", "chickens", "cats", "dogs"
// let newAnimal = "chickens";
// animals.unshift("cows");
// animals.unshift(newAnimal);
// console.log(animals);


// let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];
// получите на основе исходных массивов следующие массивы
// ['dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow"];
// ["chicken", 'ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog", 'cat'];
// 1. переместите элемент "chicken" в начало массива animals
// 2. переместите элемент 'cat' в конец массива animals

/*
let chicken = pets.pop(); // 1. вырезаем элемент "chicken" из массива pets
let cat = pets.shift(); // 2. вырезаем элемент 'cat' из массива pets
animals.push(cat); // 3. вставляем элемент 'cat' в конец массива animals
animals.unshift(chicken); // 4. вставляем элемент "chicken" в начало массива animals
console.log(animals);
*/

// animals.unshift(pets.pop(animals.push(pets.shift())));
// console.log(pets, animals);


// Array.prototype.concat()
/*
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22, true];
let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
*/
// let newArr = numbers.concat(random, 'hello', 123);
// console.log(newArr);

// Array.prototype.includes()
// console.log( random.includes(56) );
// if( random.includes(44) ){
//     console.log('есть');
// }else{
//     console.log('нет');
// }

// Array.prototype.indexOf()
// console.log( numbers.indexOf(4) );

// Array.prototype.join()
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];
// let animalsStr = animals.join('; ');
// console.log(animalsStr);

// let nums = [1, 2, 3, 4, 5];
// let newNums = nums;
// newNums.push(6);

// console.log(newNums);
// console.log(nums);

// Array.prototype.slice()
// let newNum = nums.slice();
// newNum.pop();
// newNum.push(9);
// console.log(newNum);
// console.log(nums);

// let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
// console.log( pets.slice(1, 8) );

// let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
// [null, true, undefined, false, '']
// console.log( random.slice(2, 7));


// Array.prototype.splice()
// let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];

// let deleted = pets.splice(3, 0, 'camel', 'elephant');
// console.log('deleted', deleted);
// console.log('pets', pets);

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];
// 1 задание
// получите на основе имеющихся массивов массив ниже
// 1. ['ant', 'Ананас', 'Кокос', 'camel', 'duck', 'elephant', "cat", "dog"]
// 2. ['ant', 'Ананас', 'Кокос', 'camel', 'duck', 'elephant', 'Апельсин', "cat", "dog"]
//    ['ant', 'Ананас', 'Кокос', 'camel', 'duck', 'elephant', 'Апельсин', 'cat', 'dog']
// animals.splice(1, 1, fruits[1], fruits[2]); 
// animals.splice(6, 0, fruits[3]);
// console.log(animals);

/*
//let newArr = fruits.slice(1, 3);
animals.splice(1, 1, ...fruits.slice(1, 3));
console.log(animals);

//let newArr2 = fruits.slice(3, 4);
animals.splice(6, 0, ...fruits.slice(3, 4));
console.log(animals);
*/


let students = [];
let nums = [1, 2, 3, 4, 5];
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];

// let str = '';
// for( let fruit of fruits ){
//     str += `<li>${fruit}</li>`;
// }
// document.write('<ul>' + str + '</ul>');
// Киви Ананас Кокос Апельсин Банан Яблоко

// let str2 = '';
// for(let i = 1; i < fruits.length ; i++){
//     //console.log(i, fruits[i]);
//     str2 += ` ${fruits[i]}`;
// }
// console.log(str2);

// let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
// let sum = 0;
// for (let number of numbers) {
//     sum += number;
// }
// console.log(sum);

// let summ = 0;
// for (let i = 0; i < numbers.length; i++){
//     summ += numbers[i];
// }
// console.log(summ);

/*
const orders = [1, 2, 3, 4, 5];
orders.pop();
orders[1] = 9;
orders.push(1);

let newOrders = orders;

orders = [1,2,3];

console.log(orders);
*/

// let users = [
//     {
//         id: 1,
//         userName: 'Иван',
//         age: 22,
//         country: 'Россия',
//         hobby: ['Спать', 'Есть', 'Гулять', 'Отдыхать'],
//         isAdmin: false
//     },
//     {
//         id: 2,
//         userName: 'Мария',
//         age: 11,
//         country: 'Россия',
//         hobby: 'Читать',
//         isAdmin: false
//     },
//     {
//         id: 3,
//         userName: 'Анна',
//         age: 43,
//         country: 'Россия',
//         hobby: 'Работать',
//         isAdmin: true
//     }   
// ];
// console.log(users);
// let user1 = users[0];
// console.log(user1);

// let myHobby = 'hobby';
// console.log( user1[myHobby] );

// console.log( users[0].hobby );


// let domVDerevne = {
//     materialWall:'woods',
//     floor:3,
//     windows:5,
//     materialRoof: 'metal',
//     adress:{
//         city:'Okunevo',
//         street:'Cenralnaya',
//         dom: 36,
//     }
// }; 

// domVDerevne.windows -= 1;
// domVDerevne.people = 6;
// domVDerevne.adress.corp = 1;
// domVDerevne.adress.dom = 17;

// console.log(domVDerevne);

//console.log(domVDerevne);
// 3 задание
// выведите строку в массив вида: metal, 3, woods, 5, Cenralnaya
//console.log(domVDerevne.materialRoof, domVDerevne.floor, domVDerevne.materialWall, domVDerevne.windows);
// const str = `${domVDerevne.materialRoof}, ${domVDerevne.floor}, ${domVDerevne.materialWall}, ${domVDerevne.windows}`
// console.log(str);
// let metal = domVDerevne.materialRoof;
// let three = domVDerevne.floor;
// let woods = domVDerevne.materialWall;
// let five = domVDerevne.windows;
// let Cenralnaya = domVDerevne.adress.street;
// let str = metal + ', ' + three + ', ' + woods + ', ' + five + ', ' + Cenralnaya;
// console.log(str);

//console.log( domVDerevne.adress.city );


// let domVDerevne = {
//     materialWall:'woods',
//     floor:3,
//     windows:5,
//     materialRoof: 'metal',
//     key: 287981273,
//     adress:{
//         city:'Okunevo',
//         street:'Cenralnaya',
//         dom: 36,
//     }
// }; 

// for(let key in domVDerevne){
//     console.log(key, domVDerevne[key]);
// }

// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];
// for( let key in animals){
//     console.log(key, animals[key]);
// }


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


/*
let str = '<div class="users">';
let i = 1;
for( let user of users ){
    let userStr = `<div class="user user-${i}">
                        <h3>Логин клиента: ${user.userName}</h3>
                        <h4>Контактные номера:</h4>
                        <ul>
                            <li>${user.phones.join('</li><li>')}</li>
                        </ul>
                        <p>Возраст: ${user.age}</p>
                        <p>Имя: ${user.firstName}</p>
                        <p>Фамилия: ${user.lastName}</p>
                   </div>`;
    str += userStr;              
    i++;
}
str += '</div>';
document.write(str);
*/

/*
let str = '<div class="users">';
for( let i = 0; i < users.length; i++ ){
    let userStr = `<div class="user user-${i + 1}">
                        <h3>Логин клиента: ${users[i].userName}</h3>
                        <h4>Контактные номера:</h4>
                        <ul>
                            <li>${users[i].phones.join('</li><li>')}</li>
                        </ul>
                        <p>Возраст: ${users[i].age}</p>
                        <p>Имя: ${users[i].firstName}</p>
                        <p>Фамилия: ${users[i].lastName}</p>
                   </div>`;
    str += userStr;              
}
str += '</div>';
document.write(str);
*/

