<ul class="schedule__list  <?=$pseudo_element; ?>  <?=$inner_page_schedule; ?>">
	<?php foreach ($week_days as $week_day): ?>
		<li class="schedule__item  <?=$border_color; ?>">
			<h2 class="schedule__item-title  title__third  <?=$text_color; ?>  <?=$fitnes_schedule_style; ?>"><?=$week_day; ?></h2>
			<div class="schedule__item-handler  <?=$pseudo_element; ?>"></div>
		    <ul class="schedule__class-list-per-day  <?=$inner_page_schedule_list_per_day; ?>">
		    	<?php $day_schedule = get_day_schedule($week_day, $schedule_list); ?>
		    	<?php foreach ($day_schedule as $lesson): ?>
			    	<li class="schedule__class-item  <?=$border_color; ?>">
						<span class="schedule__timing-block"><?=$lesson['timing'];?></span>
						<span class="schedule__class-name"><?=$lesson['title'];?></span>
						<span class="schedule__teacher-name  <?=$text_color; ?>">
							<?=$lesson['instructor'];?>
						</span>
					</li>
			    <?php endforeach; ?>
		    </ul>
		</li>
    <?php endforeach; ?>
</ul>
		