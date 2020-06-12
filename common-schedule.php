<?php

require('init.php');

$title = 'Клуб "Спарта" - Расписание всех классов';
$background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color = 'fitness-colors__border';
$pseudo_element = 'fitness-colors__pseudo-element';
$fitnes_schedule_style = 'fitness-colors__schedule-titles-style';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$svg_color = 'fitness-colors__svg';
$inner_page_title = 'Расписание занятий';
$inner_page_schedule = 'schedule__list--shown';
$inner_page_schedule_list_per_day = 'schedule__class-list-per-day--shown';
$subscribtions = get_subscribtions($link);

$subscribing = include_template('subscribing.php', [
    'background_color' => $background_color,
    'text_color' => $text_color,
    'border_color' => $border_color,
    'pseudo_element' => $pseudo_element,
    'subscribtions' => $subscribtions]);

$schedule_list = get_schedule($link);

$schedule_yoga = include_template('schedule.php', [
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$schedule_list = get_fitness_schedule($link);

$schedule_fitness = include_template('schedule.php', [
    'background_color' => $background_color,
    'text_color' => $text_color,
    'border_color' => $border_color,
    'pseudo_element' => $pseudo_element,
    'fitnes_schedule_style' => $fitnes_schedule_style,
    'schedule_list' => $schedule_list,
    'week_days' => $week_days]);

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'svg_color' => $svg_color,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'title' => $title]);

$page_element = include_template('common-schedule.php', [
    'background_color' => $background_color,
    'inner_page_schedule' => $inner_page_schedule,
    'inner_page_schedule_list_per_day' => $inner_page_schedule_list_per_day,
	'schedule_yoga' => $schedule_yoga,
    'schedule_fitness' => $schedule_fitness,
    'week_days' => $week_days,
    'subscribing' => $subscribing]);

$page_content = include_template('inner-page.php', [
    'inner_page_title' => $inner_page_title,
    'page_element' => $page_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'background_color' => $background_color,
    'logo' => $logo,
    'logo_name' => $logo_name,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
