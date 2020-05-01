<?php

require('init.php');

$title = 'Новость от клуба "Спарта"';

if (!isset($_GET['id'])) {
	$page_content = include_template('404.php', [
		'title' => $title]);
	$layout_content = include_template('yoga-layout.php', [
		'page_content' => $page_content,
		'title' => $title]);
	print($layout_content);
	die();
} else {
	$id = $_GET['id'];
	if (!get_news_element($link, $id)) {
		$page_content = include_template('404.php', [
		'title' => $title]);
		$layout_content = include_template('yoga-layout.php', [
		'page_content' => $page_content,
		'title' => $title]);
	    print($layout_content);
	    die();
	}
}

$id = $_GET['id'];
$news_element = get_news_element($link, $id)[0];
$page_content = include_template('news-element.php', [
	'id' => $id,
	'news_element' => $news_element]);
$layout_content = include_template('yoga-layout.php', [
    'title' => $title,
    'page_content' => $page_content]);
print($layout_content);
