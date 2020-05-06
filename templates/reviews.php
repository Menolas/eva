<section class="reviews">
	<h2 class="reviews__title  title__secondary">Отзывы</h2>
	<ul class="reviews__list">
		<?php foreach ($reviews_list as $reviews_element): ?>
			<li class="reviews__item  <?=$border_color_fitness; ?>">
				<div class="reviews__item-personal-block">
					<div class="reviews__reviewer-potret"><img src="img/<?=$reviews_element['avatar'];?>" alt="фото персоны, оставившей отзыв"></div>
					<span class="reviews__reviewer-name  <?=$text_color_fitness; ?>"><?=$reviews_element['name'];?></span>
					<span class="reviews__date"><?=$reviews_element['date'];?></span>
				</div>
				<p class="reviews__text"><?=$reviews_element['review_context'];?></p>
			</li>
		<?php endforeach; ?>
	</ul>
	<a class="reviews__btn  btn  <?=$fitness_background_color; ?>" href="reviews.php">Прочитать все отзывы</a>
</section>
		