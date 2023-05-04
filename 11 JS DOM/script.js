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