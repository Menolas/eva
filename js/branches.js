// branches mobile version handlers animation

var handlerForward = document.querySelector('.branches__control-block .control-handlers__handler--right');
var handlerBack = document.querySelector('.branches__control-block .control-handlers__handler--left');
console.log(handlerBack);
var branches = document.querySelectorAll('.branches__item');

var findActiveItem = function () {
	for (var i = 0; i < branches.length; i++) {
		var index;
		if (branches[i].classList.contains('branches__item--active')) {
			index = i;
		}
	}
	return index;
};

var removeActiveElement = function () {
	var index = findActiveItem();
	branches[index].classList.remove('branches__item--active');
};

branches[0].classList.add('branches__item--active');

handlerForward.addEventListener('click', function () {
	if (!handlerForward.classList.contains('control-handlers__handler--faded')) {
	    var index = findActiveItem();
	    var nextElementIndex = index + 1;

	    if (nextElementIndex > 0) {
	    	handlerBack.classList.remove('control-handlers__handler--faded');
	    }

	    if (index < branches.length - 1) {
			branches[index].classList.remove('branches__item--active');
			branches[nextElementIndex].classList.add('branches__item--active');

			if (nextElementIndex === branches.length - 1) {
			    handlerForward.classList.add('control-handlers__handler--faded');
		    }
		}
	}
});

handlerBack.addEventListener('click', function () {
	if (!handlerBack.classList.contains('control-handlers__handler--faded')) {
		var index = findActiveItem();
		var nextElementIndex = index - 1;

		if (nextElementIndex < branches.length - 1) {
			handlerForward.classList.remove('control-handlers__handler--faded');
		}

		if (index > 0) {
			branches[index].classList.remove('branches__item--active');
			branches[nextElementIndex].classList.add('branches__item--active');

			if (nextElementIndex === 0) {
				handlerBack.classList.add('control-handlers__handler--faded');
			}
		}
	}
});
