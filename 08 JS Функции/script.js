// 1. Описание функции
// function sayHello(){
//     console.log('Hello');
// }

// 2. Вызов функции
// sayHello();

// let ch1 = 5;
// let ch2 = 3;
// function summ() {
//     console.log(ch1 + ch2);
// }
// summ();

// function sumUp(){
//     console.log(2+2);
// }
// sumUp();
// sumUp();
// sumUp();

// let num = 567;
// let str = String(num); // '567'

// function getSumm(){
//     //console.log( Number(str[0]) + Number(str[1]) + Number(str[2]) );
//     console.log( +str[0] + +str[1] + +str[2] );
// }
// getSumm();


// function sayHello(greet, firstName){
//     console.log(`${greet}, ${firstName}!!!`);
// }

// sayHello('Привет', 'Иван');
// sayHello('Добрый день', 'Анна');
// sayHello('Здрасти', 'Ирина');


// function sum (x, y) {
//     console.log (x**2+y**2);
// }
// sum(3,6);

// function summNum(a,b){
//     console.log ( `Операция ${a}**2+${b}**2: результат - ${a**2+b**2}` );
// }
// summNum(5, 6);

/*
function getSum(num1, num2){
    let res = num1 + num2; 
    return res; 
}
let sum1 = getSum(3,5);// 8
let sum2 = getSum(5,5);// 10

function getSquare(num){
    return num * num;
}
let square1 = getSquare(sum1);
let square2 = getSquare(sum2);

console.log(square1, square2);
*/

// function exampleFunc(a, b) {
//     let str = `У меня в кармане есть ${a} ${b}`;
//     return str;
// }
// let res = exampleFunc(2, 'яблока');
// console.log(res);

// function getStr(c,d){
//     return `${c} + ${d} дм`;
// }

// let result = getStr(5,7);
// console.log(result);

// function vsyakoe(n1,n2){
//     let str1 = `${n1} ${n2}`;
//     let str2 = str1 + 'jjdhhfkfkdfk';
    
//     return str2;
// }
// let res1 = vsyakoe(2,34);
// console.log(res1);

// function whatDate (day, month){
//     let str = `Сегодня ${day} ${month}`;
//     return str;
// }
// let result = whatDate(21, "апреля");
// //let result = `Сегодня 21 апреля`;
// console.log(result);

// let result2 = whatDate(11, 'Мая');
// console.log(result2);


// function exampleFunc(a, b) {
//     let str = `У меня в кармане есть ${a} ${b}`;
//     return str;
// }

// let res = exampleFunc(2, 'яблока');
// console.log(res);
/*
function sum() {
    let res = 0;
    for (let i = 0; i <= 100; i++) {
        res += i;
    }
    return res;
}
console.log(sum());
*/
/*
function sum(){

    let res = 0;
    for (let i = 0; i <= 100; i++) {
        res = res + i;
    }
    // console.log(res);
    return res; // 5050
}
// 1. sum() - вызов функции
// 2. sum - обращение как к значению

// let getSum = sum; // 5050
// console.log( getSum() );// 5050

function div(func){
    console.log( func() / 10 );
}

div( sum );
div( multiple );
div( 'hello' ); // error 
*/

// let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
// let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
// let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];

// //console.log(animals);
// for(let key in animals){
//     //console.log('ключ', key, 'значение', animals[key]);
//     //console.log( +key + 1, animals[key]);
//     key = `animal-${+key + 1}`;
//     console.log( `<p class="animal ${key}">${animals[key]}</p>`);
// }

// for(let i = 0; i < animals.length; i++){
//     console.log('ключ', i, 'значение', animals[i]);
// }
/*
function sum( start, finish){
    let res = 0;
    
    for (let i = start; i <= finish; i++) {
        res = res + i;
    }
    return res;
}

console.log( sum(50, 80) );
console.log( sum(10, 180) );
console.log( sum(32, 50) );
*/
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22];
let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];
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
        phones: ['231234', '78434', '65654323', '235564'],
    },
];

/*
function cycle(arr) {
    for (let i = 0; i < arr.length; i++) {
        console.log(arr[i]);
    };
};
cycle(fruits);
cycle(pets);
cycle(animals);*/

/*
function getElems(arr) {
    for (const elem of arr) {
        console.log(elem);
    }
}

getElems(animals);
getElems(pets);
getElems(fruits);*/
/*
function s1(someArray){
    for (let value of someArray){
        let phones = value.phones;
        console.log('объект: ', phones[phones.length-1] );    
    }
}
s1(users);*/


const meals = [100, 300, 418, 328, 321];
const tax = [0.18, 0.2]; 
const tip = [0.05, 0.07, 0.10, 0.15]; 
const discount = [0.05, 0.10, 0.15, 0.2]; 

/**
 * есть счет (массив чисел) за ужин, состоящий из произвольного кол-ва позиций
 * 1. Посчитать сумму счета
 * 2. Посчитать сумму налога + (20%)
 * 3. Посчитать сумму чаевых + (5%)
 * 4. Посчитать сумму скидки - (10%)
 * 5. Посчитать итоговую сумму по счету
 * 6. Сформировать чек клиенту
 */

/**
 * 1 Посчитать сумму счета
 */
function getBaseSumm(arrMeals){
    let sum = 0;
    for (let elem of arrMeals) {
        sum += elem;
    }
    return sum;
}
let baseBill = getBaseSumm(meals); // 1467 - базовый счет без учета доп позиций
/**
 * 2. Посчитать сумму налога
 * 3. Посчитать сумму чаевых 
 * 4. Посчитать сумму скидки
 */
function getAddition(bill, calcs){ 
    return Math.floor(bill * calcs);
}

let billTax =  getAddition(baseBill, tax[1]); // налог 0.2
let billTip = getAddition(baseBill, tip[0]); // чаевые 0.05
let billDiscount = getAddition(baseBill, discount[1]); // скидка 0.10
//console.log( `Налог: ${billTax}, Чаевые: ${billTip}, Скидка: ${billDiscount}` );

/**
 * 5. Посчитать итоговую сумму по счету
 */
function getTotalBill(base, tax, tip, discount){
    return base + tax + tip - discount;
}

let totalBill = getTotalBill(baseBill, billTax, billTip, billDiscount);

/**
 * 6. Сформировать чек клиенту
 * 
 * Сумма счета: 3200 руб.;
 * Сумма налога: 610;
 * Сумма чаевых: 320;
 * Сумма скидки: 450;
 * Итоговая сумма счета: 4500
 */
function printBill(base, tax, tip, discount, total){
    return `
        <h3>Сумма счета: ${base} руб.</h3>
        <p>Сумма налога: ${tax} руб.</p>
        <p>Сумма чаевых: ${tip} руб.</p>
        <p>Сумма скидки: ${discount} руб.</p>
        <h2>Итоговая сумма счета: ${total} руб.</h2>
    `;
}
let HTMLBill = printBill(baseBill, billTax, billTip, billDiscount, totalBill);

// 1. Получаем элемент из HTML-документа
let billInfo = document.querySelector('.bill-info');
// 2. Вставить сформированную разметку в HTML-элемент
billInfo.insertAdjacentHTML('beforeend', HTMLBill);