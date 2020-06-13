<?php

require('init.php');

$title = '"Спарта" - клуб физического комфорта';
$background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color = 'fitness-colors__border';
$pseudo_element = 'fitness-colors__pseudo-element';
$fitnes_schedule_style = 'fitness-colors__schedule-titles-style';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = '#';
$svg_color = 'fitness-colors__svg';
$news_list = get_actual_news($link);
$branches_list = get_branches($link, 'фитнес');
$subscribtions = get_subscribtions($link);
$schedule_list = get_fitness_schedule($link);
$reviews_list = get_reviews($link, 'фитнес');

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'svg_color' => $svg_color]);

$main_menu = include_template('fitness-main-menu.php', [
    'text_color' => $text_color]);

$news = include_template('news.php', [
	'background_color' => $background_color,
	'text_color' => $text_color,
	'border_color' => $border_color,
    'news_list' => $news_list]);

$branches = include_template('branches.php', [
    'text_color' => $text_color,
    'pseudo_element' => $pseudo_element,
    'branches_list' => $branches_list]);

$subscribing = include_template('subscribing.php', [
	'background_color' => $background_color,
	'text_color' => $text_color,
	'border_color' => $border_color,
    'subscribtions' => $subscribtions]);

$schedule = include_template('schedule.php', [
	'fitnes_schedule_style' => $fitnes_schedule_style,
	'background_color' => $background_color,
	'text_color' => $text_color,
	'border_color' => $border_color,
	'pseudo_element' => $pseudo_element,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$reviews = include_template('reviews.php', [
	'background_color' => $background_color,
	'text_color' => $text_color,
	'border_color' => $border_color,
    'reviews_list' => $reviews_list]);

$page_content = include_template('fitness-main-page.php', [
	'background_color' => $background_color,
	'text_color' => $text_color,
    'reviews' => $reviews,
    'news' => $news,
    'branches' => $branches,
    'subscribing' => $subscribing,
    'schedule' => $schedule]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'background_color' => $background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
