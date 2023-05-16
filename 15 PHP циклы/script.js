//Есть объект:

const account = {
    owner: 'Silvestr Stallone',
    movements: [200, -200, 340, -300, -20, 50, 400, -460],
    interestRate: 99,
    pin: 9999,
};

// С помощью методов DOM создайте разметку, стили.
// Разместите в разметке данные из объекта и поместите на страницу.

let usersContainer = document.querySelector('.users');
//console.log(usersContainer);

let str = `
    <div class="user" >
        <h2>Владелец: ${account.owner}</h2>
        <h3>Движения по счету: </h3>
        <ul>
            <li>${account.movements.join('</li><li>')}</li>
        </ul>
        <p>Рейтинг: ${account.interestRate}</p>
        <p>Пин: ${account.pin}</p>
    </div>
`;

usersContainer.insertAdjacentHTML('beforeend', str);

