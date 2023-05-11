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
let userCountry = 'switzerland';
let container = document.querySelector('#country-container');

let whereAmI = async function(country){
    // https://restcountries.com/v3.1/all
    let response = await fetch(`https://restcountries.com/v3.1/name/${country}`);// получаем объект с удаленного сервера
    //console.log(response);

    let data = await response.json(); // раскодируем данные
    data = data[0];
    console.log(data);

    // let name = data.translations.rus.official; // получаем название
    // name = `<h2 class="name">Название: <span>${name}</span></h2>`; // формируем строку с разметкой
    // container.insertAdjacentHTML('beforeend', name); // выводим данные в документ

    // 1. формирование разметки

    // 1.1 формирование строки с официальными языками
    console.log(data.languages);
    for( let language in data.languages){
        
    }

    let countryStr = `
        <div class="country">
            <div class="country-img">
                <img src="${data.coatOfArms.png}" alt="Флаг страны ${data.translations.rus.official}">
                <img src="${data.flags.png}" alt="${data.flags.alt}">
            </div>
            <h2 class="name">Название: <span>${data.translations.rus.official}</span></h2>
            <p>Площадь:  <span>${data.area}</span> км/кв</p>
            <p>Население:  <span>${data.population}</span> чел</p>
            <p>Столица(-ы):  <span>${data.capital.join(', ')}</span></p>
            <p>Граничащие страны:  <span>${data.borders.join(', ')}</span></p>
            <p>Временные зоны:  <span>${data.timezones.join(', ')}</span></p>
            <h3>Официальные языки: </h3>
            <ul></ul>
        </div>
    `;

    // 2. вывод строки с разметкой в документ
    container.insertAdjacentHTML('beforeend', countryStr);

};
whereAmI(userCountry);
whereAmI('russia');

