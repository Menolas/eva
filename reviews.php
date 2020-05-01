<?php

require('init.php');

$title = '"Ом Шанти" - Новости';

$reviews = get_reviews($link);

$page_content = include_template('reviews.php', [
    'reviews' => $reviews]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);

print($layout_content);
