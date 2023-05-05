// document.getElementById()
// let fruits = document.getElementById('fruits');
// console.log(fruits);

// let cities = document.getElementById('cities');
// console.log(cities);

// let users = document.getElementById('user-3', 'user-1');
// console.log(users);

// let users3 = document.getElementById('user-3');
// let users1 = document.getElementById('user-1');
// console.log(users3, users1);

// let user1 = document.getElementById('user-1');
// let user2 = document.getElementById('user-3');
// console.log(user1);
// console.log(user2);

// Element.getElementsByTagName
// let ul = document.getElementsByTagName('ul');
// console.log(ul);

// let div = document.getElementsByTagName('div');
// console.log(div);

// const divs = document.getElementsByTagName('div');
// [...divs].forEach(item => console.log(item));


// Document.getElementsByClassName()
// let list = document.getElementsByClassName('list');
// console.log(list);

// let users = document.getElementsByClassName('user');
// console.log(users);

// let usersContainer = document.getElementsByClassName('users');

// console.dir(usersContainer[0].children[2].children);

// let myBody = document.getElementById('my-body')
// console.log(myBody.children[0].children[2]);

// Document.querySelector()
// let ul = document.querySelector('ul');
// console.log(ul);

// let div = document.querySelector('div');
// console.log(div);

// let list = document.querySelector('.list');
// console.log(list);

// let user2 = document.querySelector('.users .user-2');
// console.log(user2);

// let list2 = document.querySelector('#list-2');
// console.log(list2);

/*
// <!-- сформируйте строку из элементов списков: "На Завтрак я ел Мандарин" -->
const breakfast = document.querySelector('#list-2 li');
const manadrin = document.querySelector('.list-1 li');
//console.log(breakfast, manadrin);
const str = `На ${breakfast.textContent} я ел ${manadrin.textContent}`;
console.log(str);*/

// Document.querySelectorAll()
// console.log( document.querySelector('.user') );
// console.log( document.querySelectorAll('.user') );
// let users = document.querySelectorAll('.users');
// console.log(users);
// console.log( users[0].textContent );
// console.log( document.querySelectorAll('.users .user-1') );

// <!-- получите список элементов из элемента  id="list-2 и элемента class="list-3" -->

// let lists = document.querySelectorAll('#list-2, .list-3');
// console.log(lists);

// console.log( document.querySelectorAll( '#list-2 .list-3'));

// const elemList2 = document.querySelectorAll('#list-2 li');
// const elemList3 = document.querySelectorAll('.list-3 li');

// elemList2.forEach(item => {
//     console.log(item.innerText);
// });

// elemList3.forEach(item => {
//     console.log(item.textContent);
// });

// console.log(document.querySelectorAll('.list-3'));
// console.log(document.querySelectorAll('#list-2'));

/**
 * манипулирование элементами
 */
// let head1 = document.querySelector('#head-1');
// // console.log(head1.textContent);
// head1.textContent = 'Hello';

// let list3 = document.querySelector('.list-3');
// list3.textContent = '<li>Мандарин</li>';

// let list3 = document.querySelector('.list-3');
// list3.innerHTML = '<li>Мандарин</li><li>Баклажан</li><li>Тыква</li>';

// let head1 = document.getElementById('head-1');
// head1.outerHTML = '<h4>Новый Уренгой</h4>';

//     <!-- получите текст элемента  id="head-3" и запишите вместо внутреннего содержимого элемента id="head-2" -->

// const head2 = document.querySelector('#head-2');
// const head3 = document.querySelector('#head-3');

// head2.innerText = head3.innerText;

// let elemToChange = document.querySelector('#head-2');
// let textChosen = document.querySelector('#head-3');

// elemToChange.innerText = textChosen.textContent;

// console.log(elemToChange);

// let head1 = document.querySelector('#head-1');
// console.log( head1.value );

// let submitBtn = document.getElementById('submit-btn');
// console.log(submitBtn.value);

// let firstName = document.querySelector('#first_name');
// console.log( firstName.value.length ); 

// if(firstName.value.length === 0){
//     console.log('Введите имя');
// }

// let user1 = document.querySelector('#user-1');
// console.log(user1.children[4]);

// let list1 = document.querySelector('.list-1');
// console.log( list1.children[3]);

// let list1 = document.querySelector('.list-1');
// console.log( list1.parentElement );

// let user1 = document.querySelector('.user-1');
// console.log(user1.parentElement);

// let user1 = document.querySelector('.user-2');
// console.log(user1.previousElementSibling);

// let user1 = document.querySelector('.user-2');
// console.log(user1.nextElementSibling);

// let head1 = document.querySelector('#head-1');
// head1.style.backgroundColor = 'olive';
// head1.style.color = 'white';
// head1.style.marginTop = '10px';
// head1.style.marginBottom = '20px';
// head1.style.padding = '10px';
// head1.style.borderRadius = '10px';

// задайте стили элементу class="users"
// let users = document.querySelector('.users');
// users.style.color = 'blue';
// users.style.border = '3px solid yellow';

// const users = document.querySelector('.users');
// users.style.backgroundColor = 'cyan';
// users.style.transform = 'rotateZ(-30deg)';

// let users = document.querySelector('.users');
// users.style.background = 'gray';
// users.style.color = 'purple';

// let users = document.querySelector('.users');
// users.style.background = 'rgba(255,25,2,0.5)';
// users.style.display = 'flex';
// users.style.flexDirection = 'column';
// users.style.justifyContent = 'center';
// users.style.alignItems = 'center';

// let usersAll=document.querySelector('.users');
// usersAll.style.backgroundColor='blue';
// usersAll.style.color='white';

// let list1 = document.querySelector('.list-1');
// list1.classList.add('box');

// let list2 = document.querySelector('.list-2');
// list2.classList.remove('list');

// добавьте элементу с id="user-2" произвольный класс и удалите класс user-2
// const user2 = document.querySelector('#user-2');
// user2.classList.remove('user-2');
// user2.classList.add('default-user');

// let user2 = document.querySelector('#user-2');
// user2.classList.add('green');
// user2.classList.remove('user-2');

// let chosenElem = document.getElementById('user-2');
// chosenElem.classList.add('superClass');
// chosenElem.classList.remove('user-2');

// let user2_2=document.querySelectorById('#user');
// user2_2.classList.add('user2_2');
// usersAll.style.backgroundColor='green';
// user2_2.classList.remove('user');

// let firstName = document.querySelector('#first_name');
// console.log(firstName.getAttribute('placeholder') );

// получите у элемента id="last_name" значение атрибута type
// let lastName = document.querySelector('#last_name');
// console.log(lastName.getAttribute('type'));

// let lastName = document.querySelector('#last_name');
// console.log(lastName.getAttribute('name'));

// let list2 = document.getElementById('list-2');
// console.log(list2.getAttribute('class'));

// let b = document.querySelector("button");
// b.setAttribute("disabled", "disabled");

// let list1 = document.querySelector('.list-1');
// list1.setAttribute('id', 'list-1');
// list1.setAttribute('class', 'new-list');

// обмен ссылок
/*
let pic1 = document.querySelector('#pic-1');
let pic2 = document.querySelector('#pic-2');
// console.log(pic1, pic2);

// 1. получить ссылки на картинки
let src1 = pic1.getAttribute('src');
let src2 = pic2.getAttribute('src');

// 2. записать в атрибуты src пути к картинкам
pic1.setAttribute('src', src2);
pic2.setAttribute('src', src1);*/

// короткая запись
// let pic1 = document.querySelector('#pic-1');
// let pic2 = document.querySelector('#pic-2');

// pic1.setAttribute('src', pic2.getAttribute('src'));
// pic2.setAttribute('src', pic1.getAttribute('src'));



// const pic1 = document.getElementById('pic-1');
// const pic2 = document.getElementById('pic-2');
// console.dir(pic1);

//First try:
// const newOrder = pic1.src; // получаем src первой картинки
// pic1.src = pic2.src; // первой картинке присваиваем значение атрибута src от второй картинки
// pic2.src = newOrder; // получаем src первой картинки подставляем в src второй картинки

//Second try:
// const newOrder = pic1.src;
// pic1.setAttribute('src', pic2.src);
// pic2.setAttribute('src', newOrder);

/*
let num1 = 234;
let btnClass = 'simple-btn';

let button = document.querySelector('button');
button.textContent = num1; 
button.setAttribute('class', btnClass);*/

// let lastPar = document.querySelector('#last-par');
// lastPar.textContent = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque fugiat placeat natus molestiae autem voluptatibus dicta doloribus? Harum, aliquam accusantium.';

// console.log( document.querySelector('.container p:nth-child(2)') );
/*
// создаем элементы
let par = document.createElement('p');
let div = document.createElement('div');

// задаем свойства
par.textContent = 'hello, summer';
par.setAttribute('id', 'par-1');
par.setAttribute('class', 'par par-1');
par.setAttribute('title', 'simple paragraph');

div.innerHTML = `<h3 class="head-3">Lorem ipsum dolor sit amet consectetur. Omnis, nobis.</h3>`;

console.log(par);
console.log(div);

// получаем элемент для вставки
let container = document.querySelector('.container');

// вставляем созданные в скрипте элементы относительно контейнера
container.insertAdjacentElement('afterbegin', par);
container.insertAdjacentElement('beforeend', div);

// создайте элемент, запишите внутрь текст или разметку, добавьте атрибуты
// и вставьте внутрь элемента  <div class="new-cantainer"></div> последним потомком
*/

// 1
/*
const elem = document.createElement('div');// создайте элемент
elem.textContent = 'hello world'; // запишите внутрь текст или разметку
const container = document.querySelector('.new-cantainer'); // получаем элемент из DOM
console.log(container);
console.log(elem);

container.insertAdjacentElement('beforeend', elem); // вставьте внутрь элемента  <div class="new-cantainer"></div>
*/

// 2
/*
let newContainer = document.querySelector('.new-cantainer'); // получаем контейнер
console.log(newContainer);
let h1 = document.createElement('h1'); // создаем заголовок
h1.textContent = 'Скоро праздники! И никакой УЧЕБЫ! ;)'; // содержимое
h1.setAttribute('id', 'greeting'); // id
h1.setAttribute('class', 'h1-decoration'); // class
newContainer.insertAdjacentElement('beforeend', h1); // вставляем созданный элемент в контейнер 

h1.style.color = 'blue';
h1.style.fontSize = '90px';
h1.style.textAlign = 'center';
h1.style.textShadow = '1px 1px 2px black, 0 0 1em blue, 0 0 0.8em blue';
h1.style.marginTop = '20%';
h1.style.paddingBottom = '10px';
h1.style.borderBottom = '1px solid blue';
*/

// 3
/*
let par2 = document.querySelector('h2');
console.log(par2);
par2.textContent = 'Пользователи';
par2.setAttribute('id', 'text-1');
par2.style.color = 'rgba(255,25,2,0.5)';

let newContainer = document.querySelector('.new-container');
newContainer.insertAdjacentElement('beforeend', par2);*/

//4
/*
let cont1 = document.createElement('h3'); // создаем элемент h3
cont1.textContent='dfjsjssjffbnf'; // задаем текст
cont1.setAttribute('id', 'par-1'); // задаем ID
//let container=document.querySelector('.container');
let new_container=document.querySelector('.new-container'); // выбираем контейнер
new_container.insertAdjacentElement('beforeend', cont1 ); // вставляем в контейнер измененный элемент*/

/*
let user = {
    avatar: 'https://images.unsplash.com/photo-1619895862022-09114b41f16f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
    userName: 'Irina111',
    firstName: 'Irina',
    lastName: 'Ivanova',
    age: 22,
    phones: ['231234', '78434', '65654323', '234533945', '3455675656', '756734345'],
};

// формируем строку из тегов, текста и данных из объекта
let userStr = `
    <div class="user user-4" id="user-4">   
        <img src="${user.avatar}" alt="${user.firstName} ${user.lastName}">            
        <h2>Имя: ${user.firstName}</h2>
        <h3>Фамилия: ${user.lastName}</h3>
        <p>Возраст: ${user.age}</p>
        <p>Телефоны: ${user.phones.join(', ')}</p>
        <a href="#">Подробнее...</a>
    </div>
`;
// получаем из документа элемент для вставки строки
let usersContainer = document.querySelector('.users');
// insertAdjacentHTML - вставляем в контейнер с юзерами нового юзера
usersContainer.insertAdjacentHTML('afterbegin', userStr);
*/


/**
 * события
 */
// let btnHello = document.querySelector('#btn-hello');

// // регистрируем обработчик события клика
// btnHello.addEventListener('click', function(){
//     console.log('hello');
// });

// получите кнопку с id="btn-add" из документа
// добавьте обработчик события по клику мыши
// в функции выведите в консоль произвольную строку
// * выведите в консоль текстовое содержимое элемента кнопки

//1
// const button = document.querySelector('#btn-add');
// button.addEventListener('click', e => console.log(e.target.textContent));

//2
// let num2 = 'knopka';

// let button2 = document.querySelector('button');
// button2.textContent=num2;

// let btnH1 = document.querySelector('#btn-add');
// btnH1.addEventListener('click', function(){
//     console.log('24324343454534355');
// });

//3
// let btnAdd = document.querySelector('#btn-add');
// btnAdd.addEventListener('click', function(){
//     console.log(`Don't worry! Be happy!`);
// });

//4
// let btn = document.querySelector('#btn-add');
// btn.style.backgroundColor = 'black';
// btn.style.padding = '15px 20px';
// btn.style.color = 'white';
// btn.style.fontSize = '20px';
// btn.style.fontWeight = '500';

// console.log('Содержимое кнопки без клика: ' + btn.innerText);
// btn.addEventListener('click', () => {
//     console.log('Это та самая произвольная строчка!');
//     console.log('Содержимое кнопки по клику: ' + btn.innerText);
// });


// let btnHello = document.querySelector('#btn-hello');

// btnHello.addEventListener('click', function(event){
//     console.log(btnHello.textContent);
//     // console.log(event.target.textContent);
//     // console.log(this.textContent);
// });

/*
let addFruit = document.querySelector('#add-fruit');// получаем кнопку
let list1 = document.querySelector('.list-1'); // получаем список, в который будем добавлять элементы
let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];

// при нажатии на кнопку добавляем элемент в конец списка
addFruit.addEventListener('click', function(){
    let lastArrEl = fruits.pop(); // забираем последний элемент массива в переменную
    // console.log(lastArrEl);
    lastArrEl = `<li>${lastArrEl}</li>`; // формируем элемент списка из элемента массива

    // добавление элемента списка в существующий список
    list1.insertAdjacentHTML('beforeend', lastArrEl);
});*/


let firstName = document.querySelector('#first_name');

// активация поля ввода текста
firstName.addEventListener('focus', function(){
    //console.log('Поле активировано');
    firstName.style.background = 'rgb(206, 250, 203)';
});

// деактивация поля ввода текста
firstName.addEventListener('blur', function(){
    //console.log('Поле деактивировано');
    firstName.style.background = 'white';

    console.log(firstName.value);
});