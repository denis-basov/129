// function sayHello( userName){
//     return `Hello, ${userName}`;
// }

// let name = 'Ivan';

// let str = `<h2>${sayHello(name)}</h2>`;

// console.log(str);

/*
// вывести числа от 1 до 5
let num = 1;

function sayHello(){
    console.log(num);
    if(num === 5){
        return; 
    }
    num++;
    sayHello();
}

sayHello();*/

/*
let num = 1;
let res = [];
function sayHello() {
    res.push(num);
    if (num >= 5) {
        return;
    }
    num++;
    sayHello();
}
sayHello();
console.log(res);*/

/*
console.log('hello');

setTimeout(function(){
    console.log('setTimeout');
}, 2000);

console.log('summer');*/


// async / await


let whereAmI = async function(){
    // https://restcountries.com/v3.1/all
    let response = await fetch(`https://restcountries.com/v3.1/name/russia`);// получаем объект с удаленного сервера
    //console.log(response);

    let data = await response.json(); // раскодируем данные
    data = data[0];

    console.log(data);
    console.log(data.capital[0]);

};
whereAmI();

