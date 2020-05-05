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
		<section class="subscribing">
			<div class="subscribing__control-block  control-handlers">
				<div class="control-handlers__handler  control-handlers__handler--left  control-handlers__handler--faded"></div>
				<div class="control-handlers__handler  control-handlers__handler--right"></div>
			</div>
			<h2 class="subscribing__title  title__secondary">Абонементы</h2>
			<ul class="subscribing__list">
				<li class="subscribing__item  subscribing__item--active">
					<h3 class="subscribing__item-title  title__third">Хатха Йога</h3>
					<div class="subscribing__description">
						<p>12 занятий - <span class="subscribing__price">600 &#8372;</span></p>
						<p>10 занятий - <span class="subscribing__price">550 &#8372;</span></p>
						<p>8 занятий - <span class="subscribing__price">500 &#8372;</span></p>
						<p>6 занятий - <span class="subscribing__price">450 &#8372;</span></p>
						<p>1 занятие - <span class="subscribing__price">80 &#8372;</span></p>
						<p>Индивидуальное занятие:<br> 1 ч. - 
						<span class="subscribing__price">200 &#8372;</span>
						/чел, 1-3 чел.</p>
					</div>
				</li>
				<li class="subscribing__item">
					<h3 class="subscribing__item-title  title__third">Йога Айенгара</h3>
					<div class="subscribing__description">
					  <p>12 занятий - <span class="subscribing__price">750 &#8372;</span></p>
						<p>10 занятий - <span class="subscribing__price">700 &#8372;</span></p>
						<p>8 занятий - <span class="subscribing__price">650 &#8372;</span></p>
						<p>6 занятий - <span class="subscribing__price">550 &#8372;</span></p>
						<p>1 занятие - <span class="subscribing__price">100 &#8372;</span></p>
						<p>Индивидуальное занятие:<br> 1 ч. - 
							<span class="subscribing__price">300 &#8372;</span>
							/чел, 1-3 чел.</p>
				  </div>
				</li>
				<li class="subscribing__item">
					<h3 class="subscribing__item-title  title__third">Фитнес, TRX, Пилатес, Танцы</h3>
					<div class="subscribing__description">
					  <p>12 занятий - <span class="subscribing__price">550 &#8372;</span></p>
						<p>10 занятий - <span class="subscribing__price">500 &#8372;</span></p>
						<p>8 занятий - <span class="subscribing__price">450 &#8372;</span></p>
						<p>6 занятий - <span class="subscribing__price">400 &#8372;</span></p>
						<p>1 занятие - <span class="subscribing__price">70 &#8372;</span></p>
						<p>Индивидуальное занятие:<br>
							1 ч. - <span class="subscribing__price">200 &#8372;</span>
							/чел, 1-3 чел.
						</p>
				  </div>
				</li>
			</ul>
		</section>
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
