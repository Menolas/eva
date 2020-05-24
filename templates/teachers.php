<ul class="teachers-list">
	<?php foreach ($instructors as $instructor): ?>
		<li class="teachers-list__item  <?=$border_color_fitness; ?>">
	        <article class="teachers-list__article">
	        	<h2 class="teachers-list__article-title  title__secondary  <?=$text_color_fitness; ?>">
	        		<?=$instructor['name']; ?>
	        	</h2>
	        	<div class="teachers-list__social-block  social-block">
					<ul class="social-block__list">
						<li class="social-block__item">
							<a class="social-block__link  <?=$svg_fitness; ?> <?=$yoga_svg; ?>" href="<?=$instructor['fb_link']; ?>">
								<svg class="<?=$svg_fitness; ?>"><use xlink:href="img/svg/svg-sprite.svg#facebook"></use></svg>
								Ссылка на профиль в Фейсбуке
							</a>
						</li>
						<li class="social-block__item">
							<a class="social-block__link  <?=$svg_fitness; ?> <?=$yoga_svg; ?>" href="<?=$instructor['inst_link']; ?>">
								<svg><use xlink:href="img/svg/svg-sprite.svg#instagram"></use></svg>
								Ссылка на профиль в Инстаграме
							</a>
						</li>
					</ul>
				</div>
	        	<div class="teachers-list__article-picture">
	        		<picture>
	        			<source media="(min-width: 375px)" srcset="img/<?=$instructor['image']; ?>-mobile-wide.jpg">
	        			<img src="img/<?=$instructor['image']; ?>-mobile.jpg" alt="Портрет Инструктора">
	        		</picture>
	        	</div>
	        	<div class="teachers-list__article-text">
	        		<p>
	        			<?=$instructor['biography']; ?>
	        		</p>
	        	</div>
	        </article>
	    </li>
	<?php endforeach; ?>
</ul>
