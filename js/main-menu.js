//  menu mobile animation

var menu = document.querySelector('.main-nav');
var menuToggler = menu.querySelector('.main-nav__toggler');
var menuBlock = menu.querySelector('.main-nav__list');
var branchesButton = menu.querySelector('.main-nav__link--branches');
var branchesMenu = menu.querySelector('.sub-menu');
var menuItems = menu.querySelectorAll('.main-nav__item');

menuToggler.addEventListener('click', function () {
	menuBlock.classList.toggle('main-nav__list--shown');
	menuToggler.classList.toggle('main-nav__toggler--close');
});

var cancellActive = function () {
	for (var i = 0; i < menuItems.length; i++) {
		if (menuItems[i].classList.contains('main-nav__item--active')) {
			menuItems[i].classList.remove('main-nav__item--active');
		}
	}
};

menuBlock.addEventListener('click', function (evt) {
	var target = event.target;
	if (target.tagName === 'li') {
		cancellActive();
		target.classList.add('main-nav__item--active');
	}
});

branchesButton.addEventListener('click', function () {
	branchesMenu.classList.toggle('sub-menu--shown');
});
