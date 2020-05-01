<main>
	<section class="news">
		<h2 class="news__title  title__secondary">Наши события</h2>
		<ul class="news__list">
			<?php foreach ($news as $news_element): ?>
				<li class="news__item">
					<article class="news__article">
						<div class="news__picture"><img src="img/<?=$news_element['image'];?>" alt="Иллюстрация новости"></div>
						<a class="news__article-link" href="news-element.php?id=<?=$news_element['id'];?>">
						    <h3 class="news__article-title  title__third"><?=$news_element['title'];?></h3>
						</a>
						<p class="news__date"><?=$news_element['timing'];?></p>
						<p class="news__text"><?=$news_element['news_context'];?></p>
						<a class="news__article-link-fb" href="https://www.facebook.com/groups/1540126396290409/">
							Прочитать новость в Фейсбуке
							<svg><use xlink:href="#facebook"></use></svg>
						</a>
					</article>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
</main>
