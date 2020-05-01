 <main class="main-reviews">
	<section class="reviews">
		<h2 class="reviews__title  title__secondary">Отзывы</h2>
		<ul class="reviews__list">
			<?php foreach ($reviews as $reviews_element): ?>
			<li class="reviews__item">
				<div class="reviews__item-personal-block">
					<div class="reviews__reviewer-potret"><img src="img/reviewer-portret-mobile.jpg" alt="фото персоны, оставившей отзыв"></div>
					<span class="reviews__reviewer-name"></span>
					<span class="reviews__date"></span>
				</div>
				<p class="reviews__text"></p>
			</li>
		</ul>
		<button class="reviews__btn  reviews__btn--message  btn" href="reviews.html">Оставить отзыв</button>
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
</main>
			