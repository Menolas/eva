<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$reviews_list = get_reviews($link);
$news_list = get_news($link);
$schedule_list = get_schedule($link);

$logo = include_template('logo-shanti.php', [
    'title' => $title]);

$news = include_template('news.php', [
    'news_list' => $news_list]);

$schedule = include_template('schedule.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$reviews = include_template('reviews.php', [
    'reviews_list' => $reviews_list]);

$page_content = include_template('yoga-main-page.php', [
    'reviews_list' => $reviews_list,
    'reviews' => $reviews,
    'news' => $news,
    'schedule' => $schedule]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'logo' => $logo,
    'page_content' => $page_content]);

print($layout_content);
