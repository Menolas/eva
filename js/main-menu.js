//  menu mobile animation

var menuToggler = document.querySelector('.main-nav__toggler');
var menuBlock = document.querySelector('.main-nav__list');
var branchesButton = document.querySelector('.main-nav__link--branches');
var branchesMenu = document.querySelector('.sub-menu');

menuToggler.addEventListener('click', function () {
	menuBlock.classList.toggle('main-nav__list--shown');
	menuToggler.classList.toggle('main-nav__toggler--close');
});

branchesButton.addEventListener('click', function () {
	branchesMenu.classList.toggle('sub-menu--shown');
});
