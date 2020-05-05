<!DOCTYPE html>
<html lang="ru">
	<head>
	    <meta charset="utf-8">
	    <title>Фитнес студия "Спарта" - Николаев</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="Keywords" content="фитнес,николаев,спорт,здоровье,танцы,пилатес,беллиденс,восточные танцы,trx,боди-памп,степ,слайд,тренировки">
	    <meta name="Description" content="Предоставляем комплексные тренировки по йоге и фитнесу с использованием различного оборудования и вспомогательных материалов, проводим семинары, индивидуальные занятия, танцевальные классы. Находимся в городе Николаеве, Украина.">
	    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<header class="main-header">
				<div class="main-header__block-wrap">
					<div class="main-header__logo  logo-block">
						<a class="logo-block__link" href="#">
							<svg><use xlink:href="#logo-om"></use></svg>
							<p class="logo-block__name">Спарта</p>
							<p class="logo-block__description">Студия фитнеса</p>
						</a>
					</div>
					<nav class="main-nav">
						<div class="main-nav__toggler">
							<span class="main-nav__toggler-element"></span>
							<span class="main-nav__toggler-label">Меню</span>
						</div>
						<ul class="main-nav__list">
							<li class="main-nav__item">
								<a class="main-nav__link" href="index.html">Главная</a>
							</li>
							<li class="main-nav__item">
								<a class="main-nav__link" href="news.html">Новости</a>
							</li>
							<li class="main-nav__item">
								<a class="main-nav__link" href="branches.html">Направления</a>
								<div class="secondary-nav">
									<ul class="secondary-nav__list">
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">Фитнес</a>
										</li>
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">Пилатес</a>
										</li>
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">TRX петли</a>
										</li>
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">Боди-памп</a>
										</li>
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">Группа здоровья</a>
										</li>
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">Восточные танцы</a>
										</li>
										<li class="secondary-nav__item">
											<a class="secondary-nav__link" href="#">Танцевальный mix</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="main-nav__item">
								<a class="main-nav__link" href="teachers.html">Тренера</a>
							</li>
							<li class="main-nav__item">
								<a class="main-nav__link" href="schedule-fitness.html">Расписание</a>
							</li>
							<li class="main-nav__item">
								<a class="main-nav__link" href="contact.html">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			<?=$page_content; ?>
			<footer class="main-footer">
				<div class="main-footer__logo  logo-block">
					<a class="logo-block__link">
						<svg><use xlink:href="#logo-om"></use></svg>
						<p class="logo-block__name">Шанти</p>
						<p class="logo-block__description">Студия йоги</p>
					</a>
				</div>
				<section class="main-footer__contact  contact">
					<h3 class="contact__title  title__third">Наши контакты</h3>
					<p  class="contact__address">
						Адрес: пр.Центральный, 6а 54030, г.Николаев</p>
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
				<p>Photo by Andrea Piacquadio from Pexels</p>
				Photo by Polina Tankilevitch from Pexels
			</footer>
		</div>
      <script src="js/main-menu.js"></script>
      <script src="js/subscribing.js"></script>
		</div>
	</body>
</html>
