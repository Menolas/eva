 <main class="main-home">
	<h1 class="main-home__title  title">Йога-студия "Ом Шанти", расположенная в г.Николаев</h1>
	<h1 class="main-home__title  main-home__title--mobile  title">Cтудия йоги</h1>
	<p class="main-home__greeting">В нашей замечательной студии мы проводим семинары и регулярные занятия для души и тела.</p>
	<p class="main-home__greeting  main-home__greeting--mobile">Семинары и регулярные занятия для души и тела</p>
	<div class="main-home__picture-wrap">
		<picture>
			<source media="(min-width: 1440px)" srcset="img/main-illustration-wide-desktop.jpg">
            <source media="(min-width: 1024px)" srcset="img/main-illustration-desktop.jpg">
	        <source media="(min-width: 768px)" srcset="img/main-illustration-tablet.jpg">
	        <source media="(min-width: 375px)" srcset="img/main-illustration-mobile-wide.jpg">
            <img src="img/main-illustration-mobile.jpg" alt="Наша студия">
		</picture>
	</div>
	<section class="news">
		<h2 class="news__title  title__secondary">Наши события</h2>
		<?=$news; ?>
		<a class="news__btn  btn" href="yoga-news.php">Читать все новости</a>
	</section>
	<section class="branches">
		<h2 class="branches__title  title__secondary">Направления</h2>
		<p class="branches__text">
			Мы много эксперементировали и практиковали самые разные направления и сегодня в нашей студии мы предлагаем то, что на наш взгляд наиболее практично и полезно для вас.
		</p>
		<?=$branches; ?>
	</section>
	<section class="teachers">
		<h2 class="teachers__title  title__secondary">Наши Преподаватели</h2>
		<div class="teachers__illustration">
			<picture>
				<source media="(min-width: 1800px)" srcset="img/teachers-desktop-wide.jpg">
				<source media="(min-width: 1024px)" srcset="img/teachers-desktop.jpg">
				<source media="(min-width: 375px)" srcset="img/teachers-tablet.jpg">
					<img src="img/teachers-mobile.jpg" alt="Направления - иллюстрация">
			</picture>
		</div>
		<p class="teachers__text">
			Наши преподаватели люди с разными судьбами, стилем жизни и образованием, но всех их объединяет одно - они очень любят свою работу, так что вы обязательно попадете к профессионалам своего дела, которые будут вас поддерживать и направлять.
		</p>
		<a class="teachers__btn  btn" href="yoga-teachers.php">Посмотреть всех )</a>
	</section>
	<?=$subscribing; ?>
	<section class="schedule">
		<h2 class="schedule__title  title__secondary">Расписание занятий</h2>
		<div class="schedule__handler"></div>
		<?=$schedule; ?>
	</section>
	<section class="reviews">
		<h2 class="reviews__title  title__secondary">Отзывы</h2>
		<?=$reviews; ?>
		<a class="reviews__btn  btn" href="yoga-reviews.php">Прочитать все отзывы</a>
	</section>
</main>
<script src="js/schedule.js"></script>
