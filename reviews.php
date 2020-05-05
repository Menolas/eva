<?php

require('init.php');

$title = '"Ом Шанти" - Новости';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';

$reviews = get_reviews($link);

$page_content = include_template('reviews.php', [
    'reviews' => $reviews]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'page_content' => $page_content]);

print($layout_content);
