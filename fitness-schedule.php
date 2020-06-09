<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color_fitness = 'fitness-colors__border';
$pseudo_element_fitness = 'fitness-colors__pseudo-element';
$fitnes_schedule_style = 'fitness-colors__schedule-titles-style';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'fitness.php';
$inner_page_title = 'Наше расписание';
$inner_page_schedule_style = 'schedule__inner';
$inner_page_schedule = 'schedule__list--shown';
$schedule_list = get_fitness_schedule($link);

$logo = include_template('logo.php', [
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_link' => $logo_link]);

$schedule = include_template('schedule.php', [
    'fitnes_schedule_style' => $fitnes_schedule_style,
    'fitness_background_color' => $fitness_background_color,
    'text_color' => $text_color,
    'border_color_fitness' => $border_color_fitness,
    'pseudo_element_fitness' => $pseudo_element_fitness,
    'inner_page_schedule' => $inner_page_schedule,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$main_menu = include_template('fitness-main-menu.php', [
    'text_color' => $text_color]);

$page_element = include_template('inner-page-schedule.php', [
    'inner_page_schedule_style' => $inner_page_schedule_style,
    'fitness_background_color' => $fitness_background_color,
    'schedule' => $schedule]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
