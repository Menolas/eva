<?php

require('init.php');

$title = 'Клуб "Спарта" - событие';
$fitness_background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color = 'fitness-colors__border';
$pseudo_element = 'fitness-colors__pseudo-element';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$svg_color = 'fitness-colors__svg';

$logo = include_template('logo.php', [
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'svg_color' => $svg_color,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'text_color' => $text_color]);

if (!isset($_GET['id'])) {
  
  $page_content = include_template('404.php', [
    'title' => $title]);

  $layout_content = include_template('layout.php', [
    'title' => $title,
    'background_color' => $background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

  print($layout_content);
  die();
  
} else {
    $id = $_GET['id'];
    if (!get_news_by_id($link, $id)) {
        
      $page_content = include_template('404.php', [
        'title' => $title]);

      $layout_content = include_template('layout.php', [
        'title' => $title,
        'background_color' => $background_color,
        'logo' => $logo,
        'main_menu' => $main_menu,
        'page_content' => $page_content]);

      print($layout_content);
      die();
    }
}

$id = $_GET['id'];

$news_element = get_news_by_id($link, $id);

$page_content = include_template('news-element.php', [
    'background_color' => $background_color,
    'text_color' => $text_color,
    'border_color' => $border_color,
    'pseudo_element' => $pseudo_element,
    'svg_color' => $svg_color,
    'news_element' => $news_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'background_color' => $background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
