<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$reviews = get_reviews($link);
$news = get_news($link);
$schedule_list = get_fitness_schedule($link);

$fitness_schedule = include_template('schedule-fitness.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$page_content = include_template('fitness-main-page.php', [
    'reviews' => $reviews,
    'news' => $news,
    'fitness_schedule' => $fitness_schedule]);

$layout_content = include_template('fitness-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);

print($layout_content);
