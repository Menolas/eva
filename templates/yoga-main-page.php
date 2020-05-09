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
		<?=$news; ?>
		<a class="news__btn  btn  <?=$fitness_background_color; ?>" href="yoga-news.php">Читать все новости</a>
	</section>
	<section class="branches">
		<h2 class="branches__title  title__secondary">Направления</h2>
		<p class="branches__text">
			Мы много эксперементировали и практиковали самые разные направления и сегодня в нашей студии мы предлагаем то, что на наш взгляд наиболее практично и полезно для вас.
		</p>
		<ul class="branches-list">
			<li class="branches-list__item">
				<article class="branches-list__aticle  hatha-yoga">
					<h2 class="branches-list__article-title  hatha-yoga__title  title__secondary">Хатха йога</h2>
					<div class="branches-list__article-picture  hatha-yoga__picture">
						<picture>
							<source media="(min-width: 768px)" srcset="img/hatha-yoga-800.jpg">
							<img src="img/illustration-hatha-yoga-mobile.jpg" alt="Хатха йога - иллюстрация">
						</picture>
					</div>
					<p class="hatha-yoga__text"> Хатха-йога — одно из наиболее распространенных направлений йоги. Пожалуй, именно с неё и начинают знакомство с этой древней системой учений, основанной много веков, и даже тысячелетий, назад. Данное направление работает прежде всего с физическим телом - в результате постоянной практики оно становится сильнее, гибче, выносливее, здоровее.
					</p>
				</article>
			</li>
			<li class="branches-list__item">
				<article class="branches-list__article  ayengar-yoga">
					<h2 class="branches-list__article-title  ayengar-yoga__title  title__secondary">Йога Айенгара</h2>
					<div class="branches-list__article-picture  ayengar-yoga__picture">
						<picture>
							<source media="(min-width: 768px)" srcset="img/ayengar-yoga-800.jpg">
							<img src="img/illustration-ayengar-yoga-mobile.jpg" alt="Хатха йога - иллюстрация">
						</picture>
					</div>
					<p class="ayengar-yoga__text">
						Характерной чертой метода является подробное, детальное объяснение каждой позы и индивидуальный подход к каждому практикующему. Важным аспектом йоги Айенгара является последовательность асан. Йога Айенгара может быть также использована в лечебных целях.
						Отличительные характеристики метода:
						<ol>
							<li>Последовательность</li>
							<li>Длительность пребывания в позе</li>
							<li>Точность в обучении</li>
							<li>Использование вспомогательных приспособлений</li>
                        </ol>
					</p>
				</article>
			</li>
		</ul>
	</section>
	<section class="teachers">
		<h2 class="teachers__title  title__secondary">Наши Преподаватели</h2>
		<div class="teachers__illustration">
			<picture>
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
	<?=$schedule; ?>
	<section class="reviews">
		<?=$reviews; ?>
		<a class="reviews__btn  btn  <?=$fitness_background_color; ?>" href="yoga-reviews.php">Прочитать все отзывы</a>
	</section>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2722.61223878996!2d31.96220711592559!3d46.96930817914761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0YHQv9Cw0YDRgtCw!5e0!3m2!1sen!2sua!4v1588501238683!5m2!1sen!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</main>
