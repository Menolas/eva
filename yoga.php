<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$header_background_color = 'main-header__block-wrap--yoga';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$reviews_list = get_reviews($link);
$news_list = get_news($link);
$subscribtions = get_subscribtions($link);
$schedule_list = get_schedule($link);

$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$news = include_template('news.php', [
    'news_list' => $news_list]);

$subscribing = include_template('subscribing.php', [
    'subscribtions' => $subscribtions]);

$schedule = include_template('schedule.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$reviews = include_template('reviews.php', [
    'reviews_list' => $reviews_list]);

$page_content = include_template('yoga-main-page.php', [
    'reviews_list' => $reviews_list,
    'reviews' => $reviews,
    'news' => $news,
    'subscribing' => $subscribing,
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
