// анимация формы для логина админов

var adminBlock = document.querySelector('.admin-block');
var adminButton = adminBlock.querySelector('.admin-block__enter');
var adminForm = adminBlock.querySelector('.form-login');
var adminCloseButton = adminBlock.querySelector('.form-login__handler');

adminButton.addEventListener('click', function () {
	adminForm.classList.add('form-login--shown');
});

adminCloseButton.addEventListener('click', function () {
	adminForm.classList.remove('form-login--shown');
});
