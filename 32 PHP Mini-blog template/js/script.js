
let container = document.querySelector('.news-container');
let moreNewsBtn = document.querySelector('#more-news');

// console.log(container);
// console.log(moreNewsBtn);

let start = 0;
let limit = 3;

// отображение данных
function showPosts(data){
    let output = data.map(function(newsItem){
        return `
        <div class="col-lg-4 mb-4">
            <div class="entry2">
                <a href="news_detail.php?id=${newsItem.id}">
                    <img src="${newsItem.image}" alt="${newsItem.title}" class="img-fluid rounded">
                </a>
                <div class="excerpt">
                    <h2>${newsItem.title}</h2>
                    <p><a href="news_detail.php?id=${newsItem.id}">Подробнее</a></p>
                </div>
            </div>
        </div>  
        `;
    });
    let outputStr = output.join('');

    if(container){// если контейнер найден, то добавляем новости
        container.insertAdjacentHTML('beforeend', outputStr);
    }

};

// получение новостей из бд
async function getPosts(){
    let res = await fetch(`/server/getNewsList.php?start=${start}&limit=${limit}`);
    let data = await res.json();
    //console.log(data);

    showPosts(data);
}
getPosts();


// обработка события клика по кнопке
if(moreNewsBtn) {
    moreNewsBtn.addEventListener('click', function (event) {
        event.preventDefault();
        start += limit;
        getPosts();
    });
}

