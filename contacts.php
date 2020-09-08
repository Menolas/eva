<?php

require('init.php');

$title = 'Студия йоги и фитнеса - контакты';
$background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$svg_color = 'fitness-colors__svg';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'fitness.php';
$inner_page_title = 'Контакты';

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link,
    'svg_color' => $svg_color]);

$main_menu = include_template('main-menu.php', [
    'text_color' => $text_color]);

$page_element = include_template('contacts.php', [
    'text_color' => $text_color]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'background_color' => $background_color,
    'title' => $title,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
