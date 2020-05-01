<?php

/**
 * Подключиться к базе данных.
 *
 * @return object
 */
function connect_db () {

  $link = mysqli_connect('127.0.0.1', 'root', '', 'sparta');
  mysqli_set_charset($link, 'utf8');

  if (!$link) {

  print('Ошибка подключения:' . mysqli_connect_error());
  die();
  }

  return $link;
}

/**
 * Получить данные из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $request SQL запрос
 *
 * @return array
 */
function db_run_query ($con, $request) {

  $result = mysqli_query($con, $request);

  if (!$result) {
    $error = mysqli_error($con);
    print("Ошибка MySQL:" . $error);
    die();
  } else {
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }
  return $result;
}

function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * Получить все отзывы из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $request SQL запрос
 *
 * @return array
 */
function get_reviews ($con) {
  $sql = "SELECT * FROM reviews ORDER BY id ASC;";

  $reviews = db_run_query($con, $sql);
  return $reviews;
}

/**
 * Получить все новости из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $request SQL запрос
 *
 * @return array
 */
function get_news ($con) {
  $sql = "SELECT * FROM news ORDER BY id ASC;";

  $news = db_run_query($con, $sql);
  return $news;
}

/**
 * Получить все новости из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param int id новости
 *
 * @return array
 */
function get_news_element ($con, $id) {
  $sql = "SELECT * FROM news WHERE n.id = $id;";
  $news_element = db_run_query($con, $sql);
  return $news_element;
}