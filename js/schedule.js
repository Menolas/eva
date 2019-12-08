// schedule block animation

var scheduleTab = document.querySelector('.schedule');
var scheduleHandler = scheduleTab.querySelector('.schedule__handler');
var weekDays = scheduleTab.querySelector('.schedule__list');
var allWeekDays = scheduleTab.querySelectorAll('.schedule__item');
var allDaysSchedules = scheduleTab.querySelectorAll('.schedule__class-list-per-day');

var hideDaySchedule = function () {
    for (var i = 0; i < allWeekDays.length; i++) {
        var crossElement = allWeekDays[i].querySelector('.schedule__item-handler');
        var daySchedule = allWeekDays[i].querySelector('.schedule__class-list-per-day');

        if (crossElement.classList.contains('schedule__item-handler--shown')) {
            crossElement.classList.remove('schedule__item-handler--shown');
        }
        if (daySchedule.classList.contains('schedule__class-list-per-day--shown')) {

            daySchedule.classList.remove('schedule__class-list-per-day--shown');
        }
    }
};

var closeSchedule = function () {
    hideDaySchedule();
    weekDays.classList.remove('schedule__list--sown');
    scheduleHandler.classList.remove('schedule__handler--close');
};

scheduleHandler.addEventListener('click', function (evt) {
    var target = event.target;
    target.classList.add('schedule__handler--close');
	weekDays.classList.add('schedule__list--sown');
    
    scheduleHandler.addEventListener('click', function () {
        hideDaySchedule();
        weekDays.classList.remove('schedule__list--sown');
        scheduleHandler.classList.remove('schedule__handler--close');
    });
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
