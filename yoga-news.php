<?php

require('init.php');

$title = '"Ом Шанти" - Новости';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$logo_link = 'yoga.php';
$news_list = get_news($link);
$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$page_content = include_template('news.php', [
    'news_list' => $news_list]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);