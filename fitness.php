<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$header_background_color = 'main-header__block-wrap--fitness';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$news_list = get_news($link);
$schedule_list = get_fitness_schedule($link);
$reviews_list = get_fitness_reviews($link);

$main_menu = include_template('fitness-main-menu.php', [
    'title' => $title]);

$news = include_template('news.php', [
    'news_list' => $news_list]);

$schedule = include_template('schedule.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$reviews = include_template('reviews.php', [
    'reviews_list' => $reviews_list]);

$page_content = include_template('fitness-main-page.php', [
    'reviews' => $reviews,
    'news' => $news,
    'schedule' => $schedule]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'header_background_color' => $header_background_color,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
