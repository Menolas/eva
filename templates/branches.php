<ul class="branches__list">
	<li>
		<div class="branches__control-block  control-handlers">
			<div class="control-handlers__handler  control-handlers__handler--left  control-handlers__handler--faded  <?=$background_color; ?>"></div>
			<div class="control-handlers__handler  control-handlers__handler--right  <?=$background_color; ?>"></div>
		</div>
	</li>
	<?php foreach ($branches_list as $branches_element): ?>
		<li class="branches__item">
			<article class="branches__article">
				<a class="branches__article-link" href="<?=$branches_element['article_link']; ?>.php">
				    <h2 class="branches__article-title  title__secondary  <?=$text_color; ?>"><?=$branches_element['title'];?></h2>
				</a>
				<div class="branches__illustration">
					<picture>
						<source media="(min-width: 1800px)" srcset="img/<?=$branches_element['image'];?>-tablet.jpg">
						<source media="(min-width: 1024px)" srcset="img/<?=$branches_element['image'];?>-desktop.jpg">
						<source media="(min-width: 768px)" srcset="img/<?=$branches_element['image'];?>-tablet.jpg">
						<source media="(min-width: 375px)" srcset="img/<?=$branches_element['image'];?>-mobile-wide.jpg">
						<img src="img/<?=$branches_element['image'];?>-mobile.jpg" alt="Направление - иллюстрация">
					</picture>
				</div>
				<div class="branches__article-text">
					<p><?=$branches_element['description'];?></p>
					<a class="branches__link-bottom  <?=$text_color; ?>  <?=$pseudo_element; ?>"
					 href="<?=$branches_element['article_link'];?>.php">Прочитать поподробнее</a>
				</div>
			</article>
		</li>
	<?php endforeach; ?>
</ul>

