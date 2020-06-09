<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color_fitness = 'fitness-colors__border';
$pseudo_element_fitness = 'fitness-colors__pseudo-element';
$fitnes_schedule_style = 'fitness-colors__schedule-titles-style';
$svg_fitness = 'fitness-colors__svg';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$logo_om_on_sun = 'logo__om-on-sun--shown';
$inner_page_title = 'Расписание занятий';
$inner_page_schedule = 'schedule__list--shown';
$inner_page_schedule_list_per_day = 'schedule__class-list-per-day--shown';

$schedule_list = get_schedule($link);

$schedule_yoga = include_template('schedule.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$schedule_list = get_fitness_schedule($link);

$schedule_fitness = include_template('schedule.php', [
    'fitness_background_color' => $fitness_background_color,
    'text_color' => $text_color,
    'border_color_fitness' => $border_color_fitness,
    'pseudo_element_fitness' => $pseudo_element_fitness,
    'fitnes_schedule_style' => $fitnes_schedule_style,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$logo = include_template('logo.php', [
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_om_on_sun' => $logo_om_on_sun,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'title' => $title]);

$page_element = include_template('common-schedule.php', [
    'fitness_background_color' => $fitness_background_color,
    'inner_page_schedule' => $inner_page_schedule,
    'inner_page_schedule_list_per_day' => $inner_page_schedule_list_per_day,
	'schedule_yoga' => $schedule_yoga,
    'schedule_fitness' => $schedule_fitness,
    'week_days' => $week_days]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'logo' => $logo,
    'logo_name' => $logo_name,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
