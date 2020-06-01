<?php

require('init.php');

$title = '"Спарта" - клуб досуга и релакса';

$page_content = include_template('index.php', [
    'title' => $title]);

print($page_content);
