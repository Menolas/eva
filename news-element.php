<?php

require('init.php');

$title = '"Спарта" - студия фитнеса';
$fitness_background_color = 'fitness-colors__background';
$text_color = 'fitness-colors__text';
$border_color_fitness = 'fitness-colors__border';
$pseudo_element_fitness = 'fitness-colors__pseudo-element';
$svg_fitness = 'fitness-colors__svg';
$logo_svg = 'sun';
$logo_name = 'Спарта';
$logo_full_name = 'Студия фитнеса';
$logo_link = 'index.php';
$logo_om_on_sun = 'logo__om-on-sun--shown';

$logo = include_template('logo.php', [
    'logo_svg' => $logo_svg,
    'logo_name' => $logo_name,
    'logo_full_name' => $logo_full_name,
    'logo_om_on_sun' => $logo_om_on_sun,
    'logo_link' => $logo_link]);

$main_menu = include_template('main-menu.php', [
    'text_color' => $text_color]);

if (!isset($_GET['id'])) {
  
  $page_content = include_template('404.php', [
    'title' => $title]);

  $layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
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
        'fitness_background_color' => $fitness_background_color,
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
    'fitness_background_color' => $fitness_background_color,
    'text_color' => $text_color,
    'border_color_fitness' => $border_color_fitness,
    'pseudo_element_fitness' => $pseudo_element_fitness,
    'svg_fitness' => $svg_fitness,
    'news_element' => $news_element]);

$layout_content = include_template('layout.php', [
    'title' => $title,
    'fitness_background_color' => $fitness_background_color,
    'logo' => $logo,
    'main_menu' => $main_menu,
    'page_content' => $page_content]);

print($layout_content);
