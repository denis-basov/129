// function sayHello(){
//     let greet = 'Hello, summer';
//     return greet;
// }
// let myGreet = sayHello()
// console.log(myGreet);

// function sayHello(){
//     return 'Hello, summer';
// }
// console.log( sayHello() );

// let fruit = 'Банан';
// function printFruit(){
//     let fruit = 'Ананас';
//     console.log(fruit);
// }
// printFruit();
// console.log(fruit);

// let fruit = 'Банан';
// function printFruit(){
//     console.log(fruit);
// }
// printFruit();
// console.log(fruit);

/*
let age = 11;
let str = '';

if(age >= 18){
    str = 'Заходи';
}else{
    str = 'Уходи';
}
console.log(str);
*/


// определение функции
// function printFruit(){
//     console.log('fruit');
// }
// printFruit();


// функциональное выражение
// let printFruit2 = function(){
//     console.log('fruit');
//     return 'fruit';
// }
// console.log( printFruit2() );


/*
// функция как аргумент
function sayHello(){
    console.log('Hello, summer');
}

function sayBye(){
    console.log('Bye, summer');
}

function hello(func){
    func(); 
    func();
    func();
}
//hello( sayHello );
//hello( sayBye );

let par = document.querySelector('p');
par.addEventListener('click', function(){
    hello(sayBye);
} );*/

/*
function getSum(){
    return 2 + 2;
}
function getMult(){
    return 5 * 5;
}

function getResult( func1, func2){
    return func2() / func1();
}
let res = getResult(getSum, getMult);
console.log(res);
*/

/*
function w(){
    return 'privet';
}
function q(){
    return 'poka';
}
function wq(fun1,fun2){
    // return fun1() + ' ' + fun2();
    return `${fun1()} ${fun2()}`;
}
let itog = wq(w,q);
console.log(itog);*/

/*
function getOne(){
    return 'Get';
}
    
function getTwo(){
    return 'Some';
}
    
function getSome(a, b){
    return a() + b();
}

let res = getSome(getOne,getTwo);
console.log(res);*/

/*
// возврат функции как значения
function setRange(min, max){
    function checkValue(value){
        return value >= min && value <= max;// bool 
    }
    return checkValue;
}

let todayRange = setRange(10, 50);
console.log( todayRange(44) );
console.log( todayRange(2) );
console.log( todayRange(12) );
console.log( todayRange(34) );
console.log( todayRange(89) );

let newRange = setRange(50, 200);
console.log(newRange(55));
console.log(newRange(10));
console.log(newRange(300));
console.log(newRange(150));
console.log(newRange(550));*/