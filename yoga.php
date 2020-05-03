<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$reviews = get_reviews($link);
$news = get_news($link);
$schedule_list = get_schedule($link);

$schedule = include_template('schedule.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$page_content = include_template('yoga-main-page.php', [
    'reviews' => $reviews,
    'news' => $news,
    'schedule' => $schedule]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);

print($layout_content);
