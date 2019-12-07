// subscribtion mobile version handlers animation

var subscribtionBlock = document.querySelector('.subscribing');
var similarSubscribElements = document.querySelector('.subscribing__list');
var blogHandlerForward = subscribtionBlock.querySelector('.control-handlers__handler--right');
var blogHandlerBack = subscribtionBlock.querySelector('.control-handlers__handler--left');
var subscribtions = subscribtionBlock.querySelectorAll('.subscribing__item');


var findActiveItem = function (array) {
	for (var i = 0; i < array.length; i++) {
		var index;
		if (array[i].classList.contains('subscribing__item--active')) {
			index = i;
		}
	}
	return index;
};
console.log(findActiveItem(subscribtions));

var removeActiveElement = function (array) {
	var index = findActiveItem();
	array[index].classList.remove('subscribing__item--active');
};
removeActiveElement(subscribtions);

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

// subscribing animation 

for (var i = 0; i < subscribtions.length; i++) {
	subscribtions[i].addEventListener('click', function () {
		removeActiveElement();
		subscribtions[i].classList.add('subscribing__item--active');
	});
}

