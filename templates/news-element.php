<article class="news__article  news__article--element">
	<div class="news__picture"><img src="img/<?=$news_element['image'];?>-mobile.jpg" alt="Иллюстрация новости"></div>
	<a class="news__article-link" href="news-element.php?id=<?=$news_element['id'];?>">
	    <h3 class="news__article-title  title__third  <?=$text_color; ?>"><?=$news_element['title'];?></h3>
	</a>
	<p class="news__date"><?=$news_element['timing'];?></p>
	<p class="news__text--full">
		<?=$news_element['news_context'];?>
	</p>
	<a class="news__article-link-fb  <?=$text_color; ?>" href="<?=$news_element['fb_link'];?>">
		Читать в Фейсбуке
		<svg><use xlink:href="#facebook"></use></svg>
	</a>
</article>
