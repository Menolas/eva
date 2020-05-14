<section class="schedule">
	<h2 class="schedule__title  title__secondary">Расписание занятий</h2>
	<div class="schedule__handler  <?=$fitness_background_color; ?>"></div>
	<ul class="schedule__list  <?=$pseudo_element_fitness; ?>">
		<?php foreach ($week_days as $week_day): ?>
			<li class="schedule__item  <?=$border_color_fitness; ?>">
				<h2 class="schedule__item-title  title__third  <?=$text_color_fitness; ?>  <?=$fitnes_schedule_style; ?>"><?=$week_day; ?></h2>
				<div class="schedule__item-handler  <?=$pseudo_element_fitness; ?>"></div>
			    <ul class="schedule__class-list-per-day">
			    	<?php $day_schedule = get_day_schedule($week_day, $schedule_list); ?>
			    	<?php foreach ($day_schedule as $lesson): ?>
				    	<li class="schedule__class-item  <?=$border_color_fitness; ?>">
							<span class="schedule__timing-block"><?=$lesson['timing'];?></span>
							<span class="schedule__class-name"><?=$lesson['title'];?></span>
							<span class="schedule__teacher-name  <?=$text_color_fitness; ?>">
								<?=$lesson['instructor'];?>
							</span>
						</li>
				    <?php endforeach; ?>
			    </ul>
			</li>
	    <?php endforeach; ?>
	</ul>
</section>
<script src="js/schedule.js"></script>
		