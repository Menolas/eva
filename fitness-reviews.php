<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'background-fitness';
$text_color_fitness = 'text-color-fitness';
$border_color_fitness = 'border-color-fitness';
$pseudo_element_fitness = 'pseudo-element-fitness';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$inner_page_title = 'Отзывы';
$reviews_list = get_reviews($link, 'фитнес');

$main_menu = include_template('fitness-main-menu.php', [
    'text_color_fitness' => $text_color_fitness]);

$page_content = include_template('reviews.php', [
	'fitness_background_color' => $fitness_background_color,
    'text_color_fitness' => $text_color_fitness,
    'border_color_fitness' => $border_color_fitness,
	'pseudo_element_fitness' => $pseudo_element_fitness,
    'reviews_list' => $reviews_list]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'text_color_fitness' => $text_color_fitness,
    'border_color_fitness' => $border_color_fitness,
	'pseudo_element_fitness' => $pseudo_element_fitness,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
