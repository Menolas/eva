<?php

require('init.php');

$title = 'Студия йоги';
$header_background_color = 'main-header__block-wrap--yoga';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$logo_link = '#';
$svg_color = 'yoga-colors__svg';
$reviews_array = get_reviews($link, 'йога');
$reviews_list = [$reviews_array[0], $reviews_array[1]];
$news_list = get_news_array($link);
$subscribtions = get_subscribtions($link);
$schedule_list = get_schedule($link);
$branches_list = get_branches($link, 'йога');

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'svg_color' => $svg_color]);

$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$news = include_template('news.php', [
    'news_list' => $news_list]);

$branches = include_template('branches.php', [
    'branches_list' => $branches_list]);

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
    'branches' => $branches,
    'subscribing' => $subscribing,
    'schedule' => $schedule]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'header_background_color' => $header_background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
