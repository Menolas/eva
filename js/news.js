var news = [
    {
        header: "Новогодний праздник в клубе «Спарта»",
        dates: "29 декабря - 12.00",
        text: "В программе праздника множество неожиданных сюрпризов, веселье, конкурсы, игры, танцы, выступления наших преподавателей и клиентов клуба, вегетарианские угощения и фотосессия! Организационный взнос 250 грн, вегетарианские угощения приносим с собой",
        illustration: "img/news-illustration-3-mobile.jpg",
        facebook: "https://www.facebook.com/events/2386674674926516/",
        link: "news1.html"
    },
    {
        header: "Йога-каникулы с Евой Гуменюк",
        dates: "24 июня - 29 июня",
        text: "Намасте, друзья! Приглашаю вас 24 - 29 июня погрузиться в практику йоги в удивительном, тихом месте, наполненном невероятной силой! Для вас: йога 2 раза в день, игра самопознания 'Лила', йога- нидра, звуковые медитации под звездами  и динамические медитации на рассвете, чайные посиделки, общение с единомышленниками, а еще - сюрпризы...! Кроме того - незабываемый  отдых на уединенном пляже, с играми и  фотосессиями, на море и обратно - с ветерком на машине 'Урал'. Для вас - вкусная вегетарианская еда, проживание в 2-х ,3х,-4-х местных комнатах, большая территория базы,расположенная у кромки лимана.",
        illustration: "img/news-illustration-4-mobile.jpg",
        facebook: "https://www.facebook.com/events/1185783384949867/",
        link: "news2.html"
    }
];

var similarNews = document.querySelector('.main-news .news__list');
var newsTemplate = document.querySelector('template').content.querySelector('.news__item');
var renderNews = function (newsItem) {
    var newsElement = newsTemplate.cloneNode(true);

    newsElement.querySelector('img').src = newsItem.illustration;
    newsElement.querySelector('.news__article-title').textContent = newsItem.header;
    newsElement.querySelector('.news__date').textContent = newsItem.dates;
    newsElement.querySelector('.news__text').textContent = newsItem.text;
    newsElement.querySelector('.social-block__link--facebook').href = newsItem.facebook;
    newsElement.querySelector('.social-block__link--om-shanti').href = newsItem.link;

    return newsElement;
};

var renderAllNews = function (news) {
    var fragment = document.createDocumentFragment();

    for (var i = 0; i < news.length; i++) {
        fragment.appendChild(renderNews(news[i]));
    }
    similarNews.appendChild(fragment);
};

renderAllNews(news);
