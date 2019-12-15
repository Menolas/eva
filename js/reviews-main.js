var reviews = [
  { 
    avatar: "img/reviewer-portret-mobile.jpg",
    name: "Елена Кунина",
    date: "11 ноября 2019 г.",
    text: "Студия Ом Шанти имеет все условия для приятной практики, все преподаватели имеют свой неповторимый стиль и обояние. Каждый класс здесь как семинар - вдохновляет и направляет. Спасибо за прекрасный опыт.",
    facebook: "https://www.facebook.com/olenakunina",
    instagram: "https://www.instagram.com/elena.kunina/"
  },
  { 
    avatar: "img/reviewer-portret-mobile.jpg",
    name: "Елена Кунина",
    date: "11 ноября 2019 г.",
    text: "Студия Ом Шанти имеет все условия для приятной практики, все преподаватели имеют свой неповторимый стиль и обояние. Каждый класс здесь как семинар - вдохновляет и направляет. Спасибо за прекрасный опыт.",
    facebook: "https://www.facebook.com/olenakunina",
    instagram: "https://www.instagram.com/elena.kunina/"
  },
  { 
    avatar: "img/reviewer-portret-mobile.jpg",
    name: "Елена Кунина",
    date: "11 ноября 2019 г.",
    text: "Студия Ом Шанти имеет все условия для приятной практики, все преподаватели имеют свой неповторимый стиль и обояние. Каждый класс здесь как семинар - вдохновляет и направляет. Спасибо за прекрасный опыт.",
    facebook: "https://www.facebook.com/olenakunina",
    instagram: "https://www.instagram.com/elena.kunina/"
  },
  { 
    avatar: "img/reviewer-portret-mobile.jpg",
    name: "Елена Кунина",
    date: "11 ноября 2019 г.",
    text: "Студия Ом Шанти имеет все условия для приятной практики, все преподаватели имеют свой неповторимый стиль и обояние. Каждый класс здесь как семинар - вдохновляет и направляет. Спасибо за прекрасный опыт.",
    facebook: "https://www.facebook.com/olenakunina",
    instagram: "https://www.instagram.com/elena.kunina/"
  }
];

var similarReviews = document.querySelector('.reviews__list');
var reviewTemplate = document.querySelector('template').content.querySelector('.reviews__item');
var openReviewFormButton = document.querySelector('.reviews__btn--message');
var reviewForm = document.querySelector('.review-form');
var overlay = document.querySelector('.container');
var reviewFormcloseButton = document.querySelector('.review-form__close-button');

openReviewFormButton.addEventListener('click', function () {
    reviewForm.classList.add('review-form--shown');
    overlay.classList.add('container--shown-overlay');

    reviewFormcloseButton.addEventListener('click', function () {
        reviewForm.classList.remove('review-form--shown');
        overlay.classList.remove('container--shown-overlay');
    });
});



var renderReview = function (reviewsItem) {
    var reviewElement = reviewTemplate.cloneNode(true);

    reviewElement.querySelector('img').src = reviewsItem.avatar;
    reviewElement.querySelector('.reviews__reviewer-name').textContent = reviewsItem.name;
    reviewElement.querySelector('.reviews__date').textContent = reviewsItem.date;
    reviewElement.querySelector('.reviews__text').textContent = reviewsItem.text;
    reviewElement.querySelector('.social-block__link--facebook').href = reviewsItem.facebook;
    reviewElement.querySelector('.social-block__link--instagram').href = reviewsItem.instagram;

    return reviewElement;
};

var renderAllReviews = function (reviews) {
    var fragment = document.createDocumentFragment();

    for (var i = reviews.length - 1; i >= reviews.length - 2; i--) {
        console.log(i);
        fragment.appendChild(renderReview(reviews[i]));
    }
    similarReviews.appendChild(fragment);
};

renderAllReviews(reviews);
