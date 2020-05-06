<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'background-fitness';
$text_color_fitness = 'text-color-fitness';
$border_color_fitness = 'border-color-fitness';
$pseudo_element_fitness = 'pseudo-element-fitness';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$news_list = get_news($link);
$subscribtions = get_subscribtions($link);
$schedule_list = get_fitness_schedule($link);
$reviews_list = get_fitness_reviews($link);

$main_menu = include_template('fitness-main-menu.php', [
    'title' => $title]);

$news = include_template('news.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color_fitness' => $text_color_fitness,
	'border_color_fitness' => $border_color_fitness,
    'news_list' => $news_list]);

$subscribing = include_template('subscribing.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color_fitness' => $text_color_fitness,
	'border_color_fitness' => $border_color_fitness,
    'subscribtions' => $subscribtions]);

$schedule = include_template('schedule.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color_fitness' => $text_color_fitness,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$reviews = include_template('reviews.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color_fitness' => $text_color_fitness,
	'border_color_fitness' => $border_color_fitness,
    'reviews_list' => $reviews_list]);

$page_content = include_template('fitness-main-page.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color_fitness' => $text_color_fitness,
    'reviews' => $reviews,
    'news' => $news,
    'subscribing' => $subscribing,
    'schedule' => $schedule]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'text_color_fitness' => $text_color_fitness,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
