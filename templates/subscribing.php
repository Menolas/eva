<section class="subscribing">
	<div class="subscribing__control-block  control-handlers">
		<div class="control-handlers__handler  control-handlers__handler--left  control-handlers__handler--faded  <?=$background_color; ?>"></div>
		<div class="control-handlers__handler  control-handlers__handler--right  <?=$background_color; ?>"></div>
	</div>
	<h2 class="subscribing__title  title__secondary  <?=$text_color; ?>">Абонементы</h2>
	<ul class="subscribing__list">
		<li class="subscribing__item  subscribing__item--active  <?=$border_color; ?>">
			<h3 class="subscribing__item-title  title__third  <?=$text_color; ?>">Хатха Йога</h3>
			<div class="subscribing__description">
				<?php foreach ($subscribtions as $subscribtion): ?>
					<?php if ($subscribtion['branch'] === 'Хатха Йога'): ?>
				        <p><?=$subscribtion['number_of_sessions']; ?> - 
				        	<span class="subscribing__price  <?=$text_color; ?>">
				        		<?=$subscribtion['price']; ?> &#8372;
				        	</span>
				        </p>
			        <?php endif; ?>
			    <?php endforeach; ?>
			</div>
		</li>
		<li class="subscribing__item  <?=$border_color; ?>">
			<h3 class="subscribing__item-title  title__third  <?=$text_color; ?>">Йога Айенгара</h3>
			<div class="subscribing__description">
			  <?php foreach ($subscribtions as $subscribtion): ?>
					<?php if ($subscribtion['branch'] === 'Йога Айенгара'): ?>
				        <p><?=$subscribtion['number_of_sessions']; ?> - 
				        	<span class="subscribing__price  <?=$text_color; ?>">
				        		<?=$subscribtion['price']; ?> &#8372;
				        	</span>
				        </p>
			        <?php endif; ?>
			  <?php endforeach; ?>
		  </div>
		</li>
		<li class="subscribing__item  <?=$border_color; ?>">
			<h3 class="subscribing__item-title  title__third  <?=$text_color; ?>">Фитнес, TRX, Пилатес, Танцы</h3>
			<div class="subscribing__description">
			  <?php foreach ($subscribtions as $subscribtion): ?>
					<?php if ($subscribtion['branch'] === 'Фитнес, TRX, Пилатес, Танцы'): ?>
				        <p><?=$subscribtion['number_of_sessions']; ?> - 
				        	<span class="subscribing__price  <?=$text_color; ?>">
				        		<?=$subscribtion['price']; ?> &#8372;
				        	</span>
				        </p>
			        <?php endif; ?>
			  <?php endforeach; ?>
		  </div>
		</li>
	</ul>
</section>

