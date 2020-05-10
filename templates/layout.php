<!DOCTYPE html>
<html lang="ru">
	<head>
	    <meta charset="utf-8">
	    <title><?=$title;?></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="Keywords" content="фитнес,йога,николаев,спорт,здоровье,танцы,хатха,айенгар,пилатес,беллиденс,восточные танцы,trx,боди-памп,степ,слайд,тренировки">
	    <meta name="Description" content="Предоставляем комплексные тренировки по йоге и фитнесу с использованием различного оборудования и вспомогательных материалов, проводим семинары, индивидуальные занятия, танцевальные классы. Находимся в городе Николаеве, Украина.">
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="main-header  <?=$fitness_background_color; ?>">
				<div class="main-header__block-wrap ">
					<div class="main-header__logo  logo-block">
						<a class="logo-block__link" href="<?=$logo_link; ?>">
							<svg>
								<use xlink:href="img/svg/svg-sprite.svg#<?=$logo_svg; ?>"></use>
							</svg>
							<p class="logo-block__name"><?=$logo_name; ?></p>
							<p class="logo-block__description"><?=$logo_full_name; ?></p>
						</a>
					</div>
					<?=$main_menu; ?>
				</div>
			</header>
            <?=$page_content;?>
			<footer class="main-footer  <?=$fitness_background_color; ?>">
				<div class="main-footer__logo  logo-block">
					<a class="logo-block__link">
						<svg><use xlink:href="img/svg/svg-sprite.svg#<?=$logo_svg; ?>"></use></svg>
						<p class="logo-block__name"><?=$logo_name; ?></p>
					</a>
				</div>
				<section class="main-footer__contact  contact">
					<h3 class="contact__title  title__third">Наши контакты</h3>
					<p  class="contact__address">
						Адрес: пр.Центральный,<br>6а 54030, г.Николаев</p>
					<p class="contact__phone">Тел: +38(063) 762 8515</p>
					<p class="contact__email">email: om.shanti.niko@gmail.com</p>
				</section>
				<section class="main-footer__short-schedule  short-schedule">
					<h3 class="short-schedule__title  title__third">Рабочие часы</h3>
					<ul class="short-schedule__list">
						<li class="short-schedule__item">
							<div class="short-schedule__days">Понедельник, Среда, Пятница</div>
							<span class="short-schedule__time">7<sup>30</sup> - 21<sup>00</sup></span>
						</li>
						<li class="short-schedule__item">
							<div class="short-schedule__days">Вторник, Четверг</div>
							<span class="short-schedule__time">7<sup>30</sup> - 20<sup>00</sup></span>
						</li>
						<li class="short-schedule__item">
							<div class="short-schedule__days">Суббота</div>
							<span class="short-schedule__time">10<sup>00</sup> - 19<sup>00</sup></span>
						</li>
						<li class="short-schedule__item">
							<div class="short-schedule__days">Воскресенье -</div>
							<span class="short-schedule__time">Выходной</span>
						</li>
					</ul>
				</section>
				<div class="main-footer__social-block  social-block">
					<ul class="social-block__list">
						<li class="social-block__item">
							<a class="social-block__link" href="https://www.facebook.com/groups/1540126396290409/">
								<svg><use xlink:href="img/svg/svg-sprite.svg#facebook"></use></svg>
								Ссылка на наш профиль в Фейсбуке
							</a>
						</li>
						<li class="social-block__item">
							<a class="social-block__link" href="https://www.instagram.com/sparta_omshanti/">
								<svg><use xlink:href="img/svg/svg-sprite.svg#instagram"></use></svg>
								Ссылка на наш профиль в Инстаграме
							</a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
	</body>
</html>
