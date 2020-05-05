<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$news_list = get_news($link);
$schedule_list = get_fitness_schedule($link);
$reviews_list = get_fitness_reviews($link);

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

$layout_content = include_template('fitness-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);

print($layout_content);
