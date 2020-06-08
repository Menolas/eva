<?php

require('init.php');

$title = '"Спарта" - клуб физического комфорта';
$fitness_background_color = 'background-fitness';
$text_color_fitness = 'text-color-fitness';
$border_color_fitness = 'border-color-fitness';
$pseudo_element_fitness = 'pseudo-element-fitness';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$logo_om_on_sun = 'logo__om-on-sun--shown';
$inner_page_title = 'Наши события';
$news_list = get_news($link);

$logo = include_template('logo.php', [
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_om_on_sun' => $logo_om_on_sun,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'text_color_fitness' => $text_color_fitness]);

$page_element = include_template('news.php', [
    'fitness_background_color' => $fitness_background_color,
    'text_color_fitness' => $text_color_fitness,
    'border_color_fitness' => $border_color_fitness,
    'pseudo_element_fitness' => $pseudo_element_fitness,
    'news_list' => $news_list]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'text_color_fitness' => $text_color_fitness,
    'border_color_fitness' => $border_color_fitness,
	'pseudo_element_fitness' => $pseudo_element_fitness,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
