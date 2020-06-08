<ul class="branches__list">
	<?php foreach ($branches_list as $branches_element): ?>
		<li class="branches__item">
			<article class="branches__article">
				<a class="branches__article-link" href="#">
				    <h2 class="branches__article-title  title__secondary  <?=$text_color_fitness; ?>"><?=$branches_element['title'];?></h2>
				</a>
				<div class="branches__illustration  hatha-yoga__picture">
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
					<a class="branches__link-bottom  <?=$text_color_fitness; ?>  <?=$pseudo_element_fitness; ?>"
					 href="<?=$branches_element['article_link'];?>.php">Прочитать поподробнее</a>
				</div>
			</article>
		</li>
	<?php endforeach; ?>
</ul>
