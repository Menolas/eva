<?php

require('init.php');

$title = 'Студия йоги и фитнеса - наши события';
$background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color = 'fitness-colors__border';
$pseudo_element = 'fitness-colors__pseudo-element';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$svg_color = 'fitness-colors__svg';
$inner_page_title = 'Наши события';
$news_list = get_actual_news($link);

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'svg_color' => $svg_color,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'text_color' => $text_color]);

$page_element = include_template('inner-page-news.php', [
    'background_color' => $background_color,
    'text_color' => $text_color,
    'border_color' => $border_color,
    'pseudo_element' => $pseudo_element,
    'news_list' => $news_list]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'background_color' => $background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
