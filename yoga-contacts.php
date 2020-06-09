<?php

require('init.php');

$title = '"Ом Шанти" - студия йоги';
$logo_svg = 'om';
$logo_name = 'Шанти';
$logo_full_name = 'Студия йоги';
$logo_link = 'yoga.php';
$yoga_svg = 'yoga-colors__svg';
$text_color = 'yoga-colors__text';
$inner_page_title = 'Контакты';

$logo = include_template('logo.php', [
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link]);

$main_menu = include_template('yoga-main-menu.php', [
    'title' => $title]);

$page_element = include_template('contacts.php', [
    'text_color' => $text_color]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
