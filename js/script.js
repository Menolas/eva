//  menu mobile animation

var menuToggler = document.querySelector('.main-nav__toggler');
var menuBlock = document.querySelector('.main-nav__list');

menuToggler.addEventListener('click', function () {
	menuBlock.classList.toggle('main-nav__list--shown');
	menuToggler.classList.toggle('main-nav__toggler--close');
});

// subscribtion mobile version handlers animation

var subscribtionBlock = document.querySelector('.subscribing');
var similarSubscribElements = document.querySelector('.subscribing__list');
var blogHandlerForward = subscribtionBlock.querySelector('.control-handlers__handler--right');
var blogHandlerBack = subscribtionBlock.querySelector('.control-handlers__handler--left');
var subscribtions = subscribtionBlock.querySelectorAll('.subscribing__item');
console.log(subscribtions);

var findActiveItem = function () {
	for (var i = 0; i < subscribtions.length; i++) {
		var index;
		if (subscribtions[i].classList.contains('subscribing__item--active')) {
			index = i;
		}
	}
	return index;
};

blogHandlerForward.addEventListener('click', function () {
	if (!blogHandlerForward.classList.contains('control-handlers__handler--faded')) {
	    var index = findActiveItem();
	    var nextElementIndex = index + 1;

	    if (nextElementIndex > 0) {
	    	blogHandlerBack.classList.remove('control-handlers__handler--faded');
	    }

	    if (index < subscribtions.length - 1) {
			subscribtions[index].classList.remove('subscribing__item--active');
			subscribtions[nextElementIndex].classList.add('subscribing__item--active');

			if (nextElementIndex === subscribtions.length - 1) {
			    blogHandlerForward.classList.add('control-handlers__handler--faded');
		    }
		}
	}
});

blogHandlerBack.addEventListener('click', function () {
	if (!blogHandlerBack.classList.contains('control-handlers__handler--faded')) {
		var index = findActiveItem();
		var nextElementIndex = index - 1;

		if (nextElementIndex < subscribtions.length - 1) {
			blogHandlerForward.classList.remove('control-handlers__handler--faded');
		}

		if (index > 0) {
			subscribtions[index].classList.remove('subscribing__item--active');
			subscribtions[nextElementIndex].classList.add('subscribing__item--active');

			if (nextElementIndex === 0) {
				blogHandlerBack.classList.add('control-handlers__handler--faded');
			}
		}
	}
});
