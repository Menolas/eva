// common schedule block animation

var schedules = document.querySelectorAll('.schedule')

var weekDays = document.querySelector('.schedule__list');
var allWeekDays = document.querySelectorAll('.schedule__item');
var allDaysSchedules = document.querySelectorAll('.schedule__class-list-per-day');

for (var i = 0; i < schedules.length; i++) {
    schedules[i].addEventListener('click', function (evt) {
        if (event.target.classList.contains('schedule__handler')) {
            event.target.classList.toggle('schedule__handler--close');
            var target = event.currentTarget;
            var weekDaysList = target.querySelector('.schedule__list');
            weekDaysList.classList.toggle('schedule__list--shown');
        }
    });
};

if (screen.width < 1000) {
    for (var i = 0; i < allWeekDays.length; i++) {
        allWeekDays[i].addEventListener('click', function (evt) {
            var target = event.currentTarget;
            var daySchedule = target.querySelector('.schedule__class-list-per-day');
            var dayScheduleHandler = target.querySelector('.schedule__item-handler');
            target.classList.add('schedule__item--active');
            daySchedule.classList.add('schedule__class-list-per-day--shown');
            dayScheduleHandler.classList.add('schedule__item-handler--shown');
            dayScheduleHandler.addEventListener('click', function (evt) {
                event.stopPropagation();
                var target = event.target;
                target.classList.remove('schedule__item-handler--shown');
                daySchedule.classList.remove('schedule__class-list-per-day--shown');
                
                for (var i = 0; i < allWeekDays.length; i++) {
                    if (allWeekDays[i].classList.contains('schedule__item--active')) {
                        allWeekDays[i].classList.remove('schedule__item--active');
                    }
                }
            });
            
        });
    };
}
