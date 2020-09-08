<!DOCTYPE html>
<html lang="ru">
	<head>
	    <title><?=$title;?></title>
	    <meta name="keywords" content="фитнес, йога, николаев, спорт, здоровье, танцы, хатха, айенгар, пилатес, беллиденс, восточные танцы, trx, боди-памп, степ, слайд, тренировки">
	    <meta name="description" content="Студия йоги и фитнеса. Тренировки с использованием различного оборудования, семинары, индивидуальные занятия, танцевальные классы">
	    <link rel="stylesheet" href="css/style.css">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<div class="front-page">
				<h1 class="front-page__title  title">Спарта</h1>
				<a class="front-page__link  front-page__link--yoga" href="yoga.php">
				  <h2 class="front-page__title-secondary  front-page__title-secondary--yoga  title__secondary">Йога</h2>
				</a>
				<div class="front-page__contacts">
					<a class="front-page__link  front-page__link--contacts" href="contacts.php">
						<svg class="front-page__decor  front-page__decor--phone">
							<use xlink:href="img/svg/svg-sprite.svg#phone"></use>
						</svg>
						<svg class="front-page__decor  front-page__decor--mail">
							<use xlink:href="img/svg/svg-sprite.svg#mail"></use>
						</svg>
						<svg class="front-page__decor  front-page__decor--pin">
							<use xlink:href="img/svg/svg-sprite.svg#pin"></use>
						</svg>
					</a>
				</div>
				<div class="front-page__schedule">
					<a class="front-page__link  front-page__link--schedule" href="common-schedule.php">
						<svg class="front-page__decor  front-page__decor--clock">
							<use xlink:href="img/svg/svg-sprite.svg#timetable"></use>
						</svg>
					</a>
				</div>
				<a class="front-page__logo" href="about.php">
					<svg class="front-page__decor  front-page__decor--sun">
						<use xlink:href="img/svg/svg-sprite.svg#sun"></use>
					</svg>
					<svg class="front-page__decor  front-page__decor--om">
						<use xlink:href="img/svg/svg-sprite.svg#om"></use>
					</svg>
				</a>
				<a class="front-page__link  front-page__link--fitness" href="fitness.php">
				  <h2 class="front-page__title-secondary  front-page__title-secondary--fitness  title__secondary">Фитнес</h2>
				</a>
			</div>
		</div>
		<script src="js/front-page-animation.js"></script>
	</body>
</html>
