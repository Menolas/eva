<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'fitness.php';
$inner_page_title = 'Административная страничка';
$main_menu = include_template('fitness-main-menu.php', [
    'text_color_fitness' => $text_color_fitness]);

$page_element = include_template('adding-form.php', [
    'text_color_fitness' => $text_color_fitness]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
