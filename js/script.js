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

// schedule block animation

var scheduleTab = document.querySelector('.schedule');
var scheduleHandler = scheduleTab.querySelector('.schedule__handler');
var week = scheduleTab.querySelector('.schedule__list');
var weekDays = scheduleTab.querySelector('.schedule__list');
var allDaysSchedules = scheduleTab.querySelectorAll('.schedule__class-list-per-day');
//var scheduleElementHandler = scheduleTab.querySelector('.schedule__item-handler');

/*var hideDaySchedule = function () {
	for (var i = 0; i < allDaysSchedules.length; i++) {
    	if (allDaysSchedules[i].classList.contains('schedule__class-list-per-day--shown')) {
    		allDaysSchedules[i].classList.remove('schedule__class-list-per-day--shown');
    		var crossElement = allDaysSchedules[i].querySelector('.schedule__item-handler');
    		if (crossElement.classList.contains('schedule__item-handler--shown')) {
    			crossElement.classList.remove('schedule__item-handler--shown');
    		}
    	}
    }
};*/

scheduleHandler.addEventListener('click', function () {
	week.classList.toggle('schedule__list--sown');
	scheduleHandler.classList.toggle('schedule__handler--close');
});


weekDays.addEventListener('click', function (evt) {
    var target = event.target;
    
    var daySchedule = target.querySelector('.schedule__class-list-per-day');
    var scheduleElementHandler = target.querySelector('.schedule__item-handler');
    console.log(daySchedule);
    daySchedule.classList.add('schedule__class-list-per-day--shown');
    scheduleElementHandler.classList.add('schedule__item-handler--shown');
    
    scheduleElementHandler.addEventListener('click', function () {
		scheduleElementHandler.classList.remove('schedule__item-handler--shown');
		daySchedule.classList.remove('schedule__class-list-per-day--shown');
	});
});

// subscribing animation 

var subscribing = document.querySelector('.subscribing');
var subscribingButtons = subscribing.querySelectorAll('.subscribing__btn');
var subscribingDescriptions = subscribing.querySelectorAll('.subscribing__longer-description');
console.log(subscribingDescriptions);

subscribing.addEventListener('click', function (evt) {
    var target = event.target;

    
});




