var scheduleTab = document.querySelector('.schedule');
var scheduleHandler = scheduleTab.querySelector('.schedule__handler');
var weekDays = scheduleTab.querySelector('.schedule__list');
var allWeekDays = scheduleTab.querySelectorAll('.schedule__item');
var allDaysSchedules = scheduleTab.querySelectorAll('.schedule__class-list-per-day');

for (var i = 0; i < allWeekDays.length; i++) {
    allWeekDays[i].addEventListener('click', function (evt) {
        var target = event.currentTarget;
        var daySchedule = target.querySelector('.schedule__class-list-per-day');
        var dayScheduleHandler = target.querySelector('.schedule__item-handler');

        daySchedule.classList.add('schedule__class-list-per-day--shown');
        dayScheduleHandler.classList.add('schedule__item-handler--shown');
        weekDays.classList.add('schedule__list--faded');

        dayScheduleHandler.addEventListener('click', function (evt) {
            event.stopPropagation();
            var target = event.target;
            target.classList.remove('schedule__item-handler--shown');
            daySchedule.classList.remove('schedule__class-list-per-day--shown');
            weekDays.classList.remove('schedule__list--faded');
        });
        
    });
};
