<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$reviews = get_reviews($link);

$news = get_news($link);

$page_content = include_template('yoga-main-page.php', [
    'reviews' => $reviews,
    'news' => $news]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);

print($layout_content);
