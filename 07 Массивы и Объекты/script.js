let students = [];
let nums = [1, 2, 3, 4, 5];
let numbers = [4, 6, 4, 6, 8, 9, 3, 4, 5, 7, 44, 22, true];
let random = [56, 'hello', null, true, undefined, false, '', 0, [1,2,3], {a:3, b:4}];
let fruits = ['Киви', 'Ананас', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];
let pets = ['cat', 'dog', 'bat', 'mouse', "pig", "goat", "sheep", "cow", "chicken"];
let animals = ['ant', 'bison', 'camel', 'duck', 'elephant', "cat", "dog"];

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

let deleted = pets.splice(3, 4);
console.log('deleted', deleted);
console.log('pets', pets);