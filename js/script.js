//  menu mobile animation

var menuToggler = document.querySelector('.main-nav__toggler');
var menuBlock = document.querySelector('.main-nav__list');

menuToggler.addEventListener('click', function () {
	menuBlock.classList.toggle('main-nav__list--shown');
	menuToggler.classList.toggle('main-nav__toggler--close');
});

console.log(menuToggler);