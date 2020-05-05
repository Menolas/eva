<section class="subscribing">
	<div class="subscribing__control-block  control-handlers">
		<div class="control-handlers__handler  control-handlers__handler--left  control-handlers__handler--faded"></div>
		<div class="control-handlers__handler  control-handlers__handler--right"></div>
	</div>
	<h2 class="subscribing__title  title__secondary">Абонементы</h2>
	<ul class="subscribing__list">
		<li class="subscribing__item  subscribing__item--active">
			<h3 class="subscribing__item-title  title__third">Хатха Йога</h3>
			<div class="subscribing__description">
				<?php foreach ($subscribtions as $subscribtion): ?>
					<?php if ($subscribtion['branch'] === 'Хатха Йога'): ?>
				        <p><?=$subscribtion['number_of_sessions']; ?> - <span class="subscribing__price"><?=$subscribtion['price']; ?> &#8372;</span></p>
			        <?php endif; ?>
			    <?php endforeach; ?>
			</div>
		</li>
		<li class="subscribing__item">
			<h3 class="subscribing__item-title  title__third">Йога Айенгара</h3>
			<div class="subscribing__description">
			  <?php foreach ($subscribtions as $subscribtion): ?>
					<?php if ($subscribtion['branch'] === 'Йога Айенгара'): ?>
				        <p><?=$subscribtion['number_of_sessions']; ?> - <span class="subscribing__price"><?=$subscribtion['price']; ?> &#8372;</span></p>
			        <?php endif; ?>
			  <?php endforeach; ?>
		  </div>
		</li>
		<li class="subscribing__item">
			<h3 class="subscribing__item-title  title__third">Фитнес, TRX, Пилатес, Танцы</h3>
			<div class="subscribing__description">
			  <?php foreach ($subscribtions as $subscribtion): ?>
					<?php if ($subscribtion['branch'] === 'Фитнес, TRX, Пилатес, Танцы'): ?>
				        <p><?=$subscribtion['number_of_sessions']; ?> - <span class="subscribing__price"><?=$subscribtion['price']; ?> &#8372;</span></p>
			        <?php endif; ?>
			  <?php endforeach; ?>
		  </div>
		</li>
	</ul>
</section>
<script src="js/subscribing.js"></script>
