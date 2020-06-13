var yogaLink = document.querySelector('.front-page__link--yoga');
var fitnessLink = document.querySelector('.front-page__link--fitness');
var frontPage = document.querySelector('.front-page');

yogaLink.addEventListener('mouseover', function () {
	frontPage.classList.add('front-page--yoga-active');
	yogaLink.addEventListener('mouseout', function () {
		frontPage.classList.remove('front-page--yoga-active');
	})
});

fitnessLink.addEventListener('mouseover', function () {
	frontPage.classList.add('front-page--fitness-active');
	fitnessLink.addEventListener('mouseout', function () {
		frontPage.classList.remove('front-page--fitness-active');
	});
});
