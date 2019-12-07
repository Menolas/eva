// schedule block animation

var scheduleTab = document.querySelector('.schedule');
var scheduleHandler = scheduleTab.querySelector('.schedule__handler');
var weekDays = scheduleTab.querySelector('.schedule__list');
var allWeekDays = scheduleTab.querySelectorAll('.schedule__item');
//var dayScheduleHandler = scheduleTab.querySelector('.schedule__item-handler');
//var daySchedule = scheduleTab.querySelector('.schedule__class-list-per-day');


scheduleHandler.addEventListener('click', function () {
	weekDays.classList.toggle('schedule__list--sown');
	scheduleHandler.classList.toggle('schedule__handler--close');
});

var closeDaySchedule = function (evt) {
    event.stopPropagation();
    var target = event.target;
    target.classList.remove('schedule__item-handler--shown');
    daySchedule.classList.remove('schedule__class-list-per-day--shown');
};

var openDaySchedule = function (evt) {
    var target = event.target;
    var daySchedule = target.querySelector('.schedule__class-list-per-day');
    var dayScheduleHandler = target.querySelector('.schedule__item-handler');

    daySchedule.classList.add('schedule__class-list-per-day--shown');
    dayScheduleHandler.classList.add('schedule__item-handler--shown');

    dayScheduleHandler.addEventListener('click', closeDaySchedule);
};

for (var i = 0; i < allWeekDays.length; i++) {
    allWeekDays[i].addEventListener('click', function (evt) {
        var target = event.currentTarget;
        var daySchedule = target.querySelector('.schedule__class-list-per-day');
        var dayScheduleHandler = target.querySelector('.schedule__item-handler');

        daySchedule.classList.add('schedule__class-list-per-day--shown');
        dayScheduleHandler.classList.add('schedule__item-handler--shown');

        dayScheduleHandler.addEventListener('click', function (evt) {
            event.stopPropagation();
            var target = event.target;
            target.classList.remove('schedule__item-handler--shown');
            daySchedule.classList.remove('schedule__class-list-per-day--shown');
        });
        
    });
};

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
