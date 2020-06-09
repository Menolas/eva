<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color_fitness = 'fitness-colors__border';
$pseudo_element_fitness = 'fitness-colors__pseudo-element';
$fitnes_schedule_style = 'fitness-colors__schedule-titles-style';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = '#';
$news_list = get_news($link);
$branches_list = get_branches($link, 'фитнес');
$subscribtions = get_subscribtions($link);
$schedule_list = get_fitness_schedule($link);
$reviews_list = get_reviews($link, 'фитнес');

$logo = include_template('logo.php', [
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link]);

$main_menu = include_template('fitness-main-menu.php', [
    'text_color' => $text_color]);

$news = include_template('news.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color' => $text_color,
	'border_color_fitness' => $border_color_fitness,
    'news_list' => $news_list]);

$branches = include_template('branches.php', [
    'text_color' => $text_color,
    'pseudo_element_fitness' => $pseudo_element_fitness,
    'branches_list' => $branches_list]);

$subscribing = include_template('subscribing.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color' => $text_color,
	'border_color_fitness' => $border_color_fitness,
    'subscribtions' => $subscribtions]);

$schedule = include_template('schedule.php', [
	'fitnes_schedule_style' => $fitnes_schedule_style,
	'fitness_background_color' => $fitness_background_color,
	'text_color' => $text_color,
	'border_color_fitness' => $border_color_fitness,
	'pseudo_element_fitness' => $pseudo_element_fitness,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$reviews = include_template('reviews.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color' => $text_color,
	'border_color_fitness' => $border_color_fitness,
    'reviews_list' => $reviews_list]);

$page_content = include_template('fitness-main-page.php', [
	'fitness_background_color' => $fitness_background_color,
	'text_color' => $text_color,
    'reviews' => $reviews,
    'news' => $news,
    'branches' => $branches,
    'subscribing' => $subscribing,
    'schedule' => $schedule]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
