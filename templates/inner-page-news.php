<ul class="news__list  news__inner-page-list">
	<?php foreach ($news_list as $news_element): ?>
		<?php if (is_time_left($news_element['date'])): ?>
			<li class="news__item  <?=$border_color; ?>">
				<article class="news__article">
					<div class="news__picture"><img src="img/<?=$news_element['image'];?>-mobile.jpg" alt="Иллюстрация новости"></div>
					<a class="news__article-link" href="news-element.php?id=<?=$news_element['id'];?>">
					    <h3 class="news__article-title  title__third  <?=$text_color; ?>"><?=$news_element['title'];?></h3>
					</a>
					<p class="news__date"><?=$news_element['timing'];?></p>
					<p class="news__text--full">
						<?=$news_element['news_context'];?>
					</p>
					<a class="news__article-link-fb  <?=$text_color; ?>" href="https://www.facebook.com/groups/1540126396290409/">
						Читать в Фейсбуке
						<svg><use xlink:href="#facebook"></use></svg>
					</a>
				</article>
			</li>
		<?php endif; ?>
	<?php endforeach; ?>
</ul>
