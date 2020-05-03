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
								<svg><use xlink:href="#facebook"></use></svg>
								Ссылка на наш профиль в Фейсбуке
							</a>
						</li>
						<li class="social-block__item">
							<a class="social-block__link" href="https://www.instagram.com/sparta_omshanti/">
								<svg><use xlink:href="#instagram"></use></svg>
								Ссылка на наш профиль в Инстаграме
							</a>
						</li>
					</ul>
				</div>
			</footer>
		</div>
		<svg display="none">
			<symbol id="instagram" viewBox="0 0 24 24">
				<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
			</symbol>
			<symbol id="facebook" viewBox="0 0 24 24">
				<path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
			</symbol>
			<symbol id="logo-om" viewBox="0 0 1250.000000 1280.000000">
				<g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)">
				<path d="M7156 12205 c-311 -327 -566 -596 -566 -599 0 -5 1179 -1090 1189
					-1093 6 -3 1143 1152 1149 1167 2 4 -248 239 -555 521 -307 283 -579 533 -604
					556 l-46 43 -567 -595z"/>
					<path d="M5394 12090 c3 -25 8 -90 11 -145 27 -461 135 -965 292 -1365 64
					-163 188 -404 281 -545 245 -375 582 -679 962 -870 398 -200 832 -296 1340
					-297 569 -2 1115 112 1689 349 495 205 924 480 1260 809 l135 131 -80 99 c-99
					123 -315 400 -644 829 -139 182 -264 342 -276 357 l-23 28 -128 -113 c-606
					-532 -1199 -898 -1744 -1077 -280 -92 -505 -130 -772 -130 -251 0 -429 29
					-647 105 -427 149 -813 456 -1142 906 -174 238 -353 563 -458 830 -29 74 -55
					136 -57 139 -3 3 -2 -15 1 -40z"/>
					<path d="M3765 10174 c-282 -28 -456 -57 -688 -115 -563 -141 -1169 -415
					-1787 -806 -94 -59 -170 -111 -170 -115 0 -5 822 -1495 877 -1590 6 -11 165
					71 292 149 58 36 212 139 342 229 294 204 417 279 594 365 162 78 302 127 465
					160 105 22 140 24 390 24 280 0 359 -7 554 -46 413 -83 692 -280 777 -549 30
					-93 36 -244 14 -351 -74 -366 -383 -707 -735 -813 -226 -67 -544 -106 -864
					-106 -242 1 -435 17 -779 66 -151 22 -262 33 -267 28 -5 -5 125 -426 313
					-1014 178 -553 326 -1013 329 -1022 6 -15 23 -11 147 32 161 57 418 122 571
					145 167 26 413 30 553 11 422 -60 732 -268 903 -609 91 -180 133 -351 141
					-577 25 -680 -373 -1352 -972 -1640 -216 -104 -517 -178 -915 -226 -198 -24
					-596 -24 -770 0 -356 48 -625 128 -910 270 -478 238 -875 606 -1214 1123 -434
					663 -746 1586 -895 2647 -11 76 -22 140 -24 142 -2 3 -7 -35 -10 -83 -52 -728
					-24 -1451 78 -2049 276 -1609 1089 -2787 2359 -3415 452 -224 908 -358 1426
					-421 142 -17 549 -17 668 0 187 27 524 139 760 252 887 427 1438 1143 1562
					2035 45 323 26 749 -50 1126 -77 381 -230 838 -421 1253 -38 82 -67 151 -66
					153 2 1 62 -6 133 -16 411 -61 855 -50 1162 28 538 138 905 435 1164 941 35
					69 79 168 97 220 126 358 191 502 298 665 126 192 284 356 493 514 459 347
					865 443 1199 285 390 -183 674 -711 780 -1449 46 -316 52 -738 16 -1039 -95
					-801 -539 -1397 -1334 -1794 -410 -205 -769 -292 -1146 -279 -399 14 -718 154
					-978 426 -209 220 -365 529 -462 915 -25 102 -45 162 -48 150 -10 -33 -46
					-245 -61 -364 -130 -984 101 -1836 644 -2380 653 -653 1667 -781 2546 -321
					825 433 1393 1307 1584 2441 79 473 85 846 24 1455 -92 922 -330 1687 -695
					2235 -129 192 -208 290 -359 440 -333 333 -742 552 -1204 645 -176 35 -309 47
					-506 47 -401 -1 -773 -83 -1082 -238 -124 -62 -174 -100 -326 -243 -248 -234
					-427 -447 -627 -746 -141 -213 -234 -375 -443 -780 -189 -367 -271 -514 -353
					-637 -219 -325 -456 -496 -766 -552 -197 -36 -127 -54 -720 184 -291 117 -529
					213 -531 215 -2 1 50 37 114 80 314 206 604 464 809 717 239 296 421 657 504
					999 49 204 56 266 55 514 0 245 -9 320 -60 515 -175 669 -683 1189 -1384 1419
					-281 92 -475 122 -820 126 -140 2 -273 1 -295 -1z"/></g>
			</symbol>
        </svg>
      <template>
    	<li class="news__item">
			<article class="news__article">
				<div class="news__picture"><img src="img/news-illustration-2-mobile.jpg" alt="Иллюстрация новости"></div>
				<h3 class="news__article-title  title__third"></h3>
				<p class="news__date"></p>
				<p class="news__text"></p>
				<div class="news__social-block  social-block">
					<ul class="social-block__list">
						<li class="social-block__item">
							<a class="social-block__link  social-block__link--facebook" href="https://www.facebook.com/groups/1540126396290409/">
								Прочитать всю новость в Фейсбуке
								<svg><use xlink:href="#facebook"></use></svg>
							</a>
						</li>
						<li class="social-block__item">
							<a class="social-block__link  social-block__link--om-shanti" href="#">
								Прочитать всю новость на нашем сайте
								<svg><use xlink:href="#logo-om"></use></svg>
							</a>
						</li>
					</ul>
				</div>
			</article>
		</li>
		<li class="reviews__item">
			<div class="reviews__item-personal-block">
				<div class="reviews__reviewer-potret"><img src="img/reviewer-portret-mobile.jpg" alt="фото персоны, оставившей отзыв"></div>
				<span class="reviews__reviewer-name"></span>
				<span class="reviews__date"></span>
				<div class="reviews__reviewer-social-block  social-block">
					<ul class="social-block__list">
						<li class="social-block__item">
							<a class="social-block__link  social-block__link--facebook" href="#">
								<svg><use xlink:href="#facebook"></use></svg>
								Ссылка на мой профиль в Фейсбуке
							</a>
						</li>
						<li class="social-block__item">
							<a class="social-block__link  social-block__link--instagram" href="#">
								<svg><use xlink:href="#instagram"></use></svg>
								Ссылка на мой профиль в Инстаграме
							</a>
						</li>
					</ul>
				</div>
			</div>
			<p class="reviews__text"></p>
		</li>
      </template>
      <script src="js/main-menu.js"></script>
      <script src="js/subscribing.js"></script>
      <script src="js/schedule.js"></script>
      <script src="js/news-main.js"></script>
      <script src="js/reviews-main.js"></script>
		</div>
	</body>
</html>
