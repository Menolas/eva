 <main class="main-reviews">
	<section class="reviews">
		<h2 class="reviews__title  title__secondary">Отзывы</h2>
		<ul class="reviews__list">
			<?php foreach ($reviews as $reviews_element): ?>
				<li class="reviews__item">
					<div class="reviews__item-personal-block">
						<div class="reviews__reviewer-potret"><img src="img/<?=$reviews_element['avatar'];?>" alt="фото персоны, оставившей отзыв"></div>
						<span class="reviews__reviewer-name"><?=$reviews_element['name'];?></span>
						<span class="reviews__date"><?=$reviews_element['date'];?></span>
					</div>
					<p class="reviews__text"><?=$reviews_element['review_context'];?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
</main>
			