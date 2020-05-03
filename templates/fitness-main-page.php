<main class="main-home">
				<h1 class="main-home__title  title">Йога-студия "Ом Шанти", расположенная в г.Николаев</h1>
				<h1 class="main-home__title  main-home__title--mobile  title">Cтудия йоги</h1>
				<p class="main-home__greeting">В нашей замечательной студии мы проводим семинары и регулярные занятия для души и тела.</p>
				<p class="main-home__greeting  main-home__greeting--mobile">Семинары и регулярные занятия для души и тела</p>
				<div class="main-home__picture-wrap">
					<picture>
              <source media="(min-width: 1000px)" srcset="img/illustration-studio-1000.jpg">
            	<source media="(min-width: 768px)" srcset="img/illustration-studio-800.jpg">
              <img src="img/illustration-studio-370.jpg" alt="Наша студия">
					</picture>
				</div>
				<section class="news">
					<h2 class="news__title  title__secondary">Наши события</h2>
					<ul class="news__list"></ul>
					<a class="news__btn btn" href="news.html">Читать все новости</a>
				</section>
				<section class="branches">
					<h2 class="branches__title  title__secondary">Направления</h2>
					<p class="branches__text">
						В нашей студии проводятся разные классы для любого уровня подготовки, возраста и потребностей. Вы можете прочитать подробнее в специальном разделе.
					</p>
					<a class="branches__btn  btn" href="branches.html">Подробнее</a>
					<div class="branches__illustration">
						<picture>
							  <source media="(min-width: 1000px)" srcset="img/illustration-branches-1000.jpg">
								<img src="img/illustration-branches-370.jpg" alt="Направления - иллюстрация">
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
								<p>Индивидуальное занятие:<br> 1 ч. - 
									<span class="subscribing__price">200 &#8372;</span>
									/чел, 1-3 чел.</p>
						  </div>
						</li>
					</ul>
				</section>
				<?=$fitness_schedule; ?>
				<section class="reviews">
					<h2 class="reviews__title  title__secondary">Отзывы</h2>
					<ul class="reviews__list"></ul>
					<div class="reviews__btn-wrap">
						<a class="reviews__btn  reviews__btn--read  btn" href="reviews.html">Прочитать все отзывы</a>
						<button class="reviews__btn  reviews__btn--message  btn" href="reviews.html">Оставить отзыв</button>
					</div>
					<form class="review-form">
						<div class="review-form__close-button"></div>
						<div class="review-form__input-wrap  review-form__input-wrap--file">
							<input type="file" name="file" id="file">
							<label for="file">Загрузите свой аватар</label>
						</div>
						<div class="review-form__input-wrap  review-form__input-wrap--name">
							<input type="text" name="name" id="name" placeholder="Имя" required>
						</div>
						<div class="review-form__input-wrap  review-form__input-wrap--surname">
							<input type="text" name="surname" id="surname" placeholder="Фамилия" required>
						</div>
						<div class="review-form__input-wrap  review-form__input-wrap--card">
							<input type="text" name="card-number" id="card-number" placeholder="Номер вашей клубной карты" required>
						</div>
						<div class="review-form__input-wrap  review-form__input-wrap--message">
							<textarea id="text" rows="7">Текст вашего сообщения</textarea>
						</div>
						<input class="btn" type="submit" name="" value="Добавить отзыв">
					</form>
				</section>
				<div class="map"></div>
			</main>