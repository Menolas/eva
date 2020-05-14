<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'background-fitness';
$text_color_fitness = 'text-color-fitness';
$border_color_fitness = 'border-color-fitness';
$pseudo_element_fitness = 'pseudo-element-fitness';
$svg_fitness = 'svg-color';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$instructors = get_instructors($link, 'фитнес');

$main_menu = include_template('fitness-main-menu.php', [
    'title' => $title]);

$page_content = include_template('teachers.php', [
	'fitness_background_color' => $fitness_background_color,
    'text_color_fitness' => $text_color_fitness,
    'border_color_fitness' => $border_color_fitness,
	'pseudo_element_fitness' => $pseudo_element_fitness,
	'svg_fitness' => $svg_fitness,
    'instructors' => $instructors]);

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