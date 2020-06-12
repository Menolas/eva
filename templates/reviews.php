<ul class="reviews__list">
	<?php foreach ($reviews_list as $reviews_element): ?>
		<li class="reviews__item  <?=$border_color; ?>">
			<div class="reviews__item-personal-block">
				<div class="reviews__reviewer-potret">
					<picture>
						<source media="(min-width: 1400px)" srcset="img/<?=$reviews_element['avatar'];?>-desktop.jpg">
						<img src="img/<?=$reviews_element['avatar'];?>-mobile.jpg" alt="фото персоны, оставившей отзыв">
					</picture>
				</div>
				<span class="reviews__reviewer-name  <?=$text_color; ?>"><?=$reviews_element['name'];?></span>
				<span class="reviews__date"><?=$reviews_element['date'];?></span>
			</div>
			<p class="reviews__text"><?=substr($reviews_element['review_context'], 0, 200);?>...</p>
			<p class="reviews__text  reviews__text--full"><?=$reviews_element['review_context'];?></p>
		</li>
	<?php endforeach; ?>
</ul>
