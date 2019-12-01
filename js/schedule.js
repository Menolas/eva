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
    console.log(daySchedule);
    var scheduleElementHandler = target.querySelector('.schedule__item-handler');
    daySchedule.classList.add('schedule__class-list-per-day--shown');
    scheduleElementHandler.classList.add('schedule__item-handler--shown');
    
    scheduleElementHandler.addEventListener('click', function () {
		scheduleElementHandler.classList.remove('schedule__item-handler--shown');
		daySchedule.classList.remove('schedule__class-list-per-day--shown');
	});
});
