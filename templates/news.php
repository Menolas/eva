<h2 class="news__title  title__secondary">Наши события</h2>
<ul class="news__list">
	<?php foreach ($news_list as $news_element): ?>
		<li class="news__item  <?=$border_color_fitness; ?>">
			<article class="news__article">
				<div class="news__picture"><img src="img/<?=$news_element['image'];?>" alt="Иллюстрация новости"></div>
				<a class="news__article-link" href="news-element.php?id=<?=$news_element['id'];?>">
				    <h3 class="news__article-title  title__third  <?=$text_color_fitness; ?>"><?=$news_element['title'];?></h3>
				</a>
				<p class="news__date"><?=$news_element['timing'];?></p>
				<p class="news__text">
					<?=substr($news_element['news_context'], 0, 241);?>...
					<a class="news__article-link-text  <?=$text_color_fitness; ?>" href="#">Прочитать больше</a>
				</p>
				<a class="news__article-link-fb  <?=$text_color_fitness; ?>" href="https://www.facebook.com/groups/1540126396290409/">
					Прочитать новость в Фейсбуке
					<svg><use xlink:href="#facebook"></use></svg>
				</a>
			</article>
		</li>
	<?php endforeach; ?>
</ul>
