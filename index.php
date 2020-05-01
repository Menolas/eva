<?php

require('init.php');

$title = '"Спарта" - клуб досуга и релакса';

$page_content = include_template('frontal-page.php', [
    'title' => $title]);

print($page_content);
