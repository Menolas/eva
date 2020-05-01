<?php

require('init.php');

$title = '"Ом Шанти" - Новости';

$news = get_news($link);

$page_content = include_template('news-list.php', [
    'news' => $news]);

$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);

print($layout_content);
