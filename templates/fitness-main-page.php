<main class="main-home">
	<h1 class="main-home__title  title">"Спарта" - клуб досуга и релакса, расположенный в г. Николаеве</h1>
	<h1 class="main-home__title  main-home__title--mobile  title">Cтудия фитнеса</h1>
	<p class="main-home__greeting">В нашей замечательной студии мы проводим семинары и регулярные занятия для души и тела.</p>
	<p class="main-home__greeting  main-home__greeting--mobile">Семинары и регулярные занятия для души и тела</p>
	<div class="main-home__picture-wrap">
		<picture>
			<source media="(min-width: 1440px)" srcset="img/fitness-main-illustration-desktop-wide.jpg">
			<source media="(min-width: 1024px)" srcset="img/fitness-main-illustration-desktop.jpg">
			<source media="(min-width: 768px)" srcset="img/fitness-main-illustration-tablet.jpg">
		    <source media="(min-width: 375px)" srcset="img/fitness-main-illustration-mobile-wide.jpg">
			<img src="img/fitness-main-illustration-mobile.jpg" alt="Наша студия">
		</picture>
	</div>
	<?=$news; ?>
	<section class="branches">
		<h2 class="branches__title  title__secondary">Направления</h2>
		<p class="branches__text">
			В нашей студии проводятся разные классы для любого уровня подготовки, возраста и потребностей. Вы можете прочитать подробнее в специальном разделе.
		</p>
		<a class="branches__btn  btn" href="branches.html">Подробнее</a>
		<div class="branches__illustration">
			<picture>
				  <source media="(min-width: 1024px)" srcset="img/fitness-branches-desktop.jpg">
				  <source media="(min-width: 768px)" srcset="img/fitness-branches-tablet.jpg">
					<img src="img/fitness-branches-mobile.jpg" alt="Направления - иллюстрация">
			</picture>
		</div>
	</section>
	<section class="teachers">
		<h2 class="teachers__title  title__secondary">Наши Преподаватели</h2>
		<p class="teachers__text">
			Наши преподаватели люди с разными судьбами, стилем жизни и образованием, но всех их объединяет одно - они очень любят свою работу, так что вы обязательно попадете к профессионалам своего дела, которые будут вас поддерживать и направлять.
		</p>
		<a class="teachers__btn  btn" href="teachers.html">Посмотреть всех )</a>
		<div class="branches__illustration">
			<picture>
				<source media="(min-width: 1000px)" srcset="img/illustration-teachers-1000.jpg">
					<img src="img/illustration-teachers-370.jpg" alt="Направления - иллюстрация">
			</picture>
		</div>
	</section>
	<?=$subscribing; ?>
	<?=$schedule; ?>
	<section class="reviews">
		<h2 class="reviews__title  title__secondary">Отзывы</h2>
		<ul class="reviews__list">
			<?=$reviews; ?>
		</ul>
		<a class="reviews__btn btn" href="reviews.php">Прочитать все отзывы</a>
	</section>
	<div class="map"></div>
</main>
