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
 * Найти пользователя по id в базе данных.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param integer $id ID пользователя
 *
 * @return array|false
 */
function get_admin_by_id ($con, $id) {

  $sql = "
    SELECT * FROM admins WHERE id = $id;";
  $admin = db_run_query($con, $sql);

  if (count($admin)) {
    return $admin[0];
  } 
  return false;
}

/**
 * Добавить админа в базу данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $email Емейл админа
 * @param string $login Логин админа
 * @param string $password Пароль админа
 *
 * @return object|false
 */
function db_insert_admin ($con, $email, $login, $password) {

  $filtered_email = mysqli_real_escape_string($con, $email);
  $filtered_login = mysqli_real_escape_string($con, $login);
  $filtered_password = mysqli_real_escape_string($con, $password);
  $sql = "
    INSERT INTO admins SET
    email = '$filtered_email',
    login = '$filtered_login',
    password = '$filtered_password';";
  $res = mysqli_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

/**
 * Найти пользователя по логину в базе данных.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $login логин пользователя
 *
 * @return array|false
 */
function find_admin_by_login ($con, $login) {

  $filtered_login = mysqli_real_escape_string($con, $login);
  $sql = "
    SELECT * FROM admins WHERE login = '$filtered_login';";
  $admin = db_run_query($con, $sql);

  if (count($admin)) {
    return $admin[0];
  } 
  return false;
}

/**
* Получить список всех админов
* @param object $con Ссылка для подключения к базе данных
*
* @return array
*/
function get_admins_list ($con) {
  $sql = "SELECT * FROM admins ORDER BY id ASC;";
  $admins_list = db_run_query($con, $sql);
  return $admins_list;
}

/**
 * Получить отзывы о йога студии из базы.
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $branch одно из направлений по которому работает студия
 *
 * @return array
 */
function get_reviews ($con, $branch) {
  $sql = "SELECT * FROM reviews WHERE reviews.branch = '$branch' ORDER BY id ASC;";

  $reviews = db_run_query($con, $sql);
  return $reviews;
}

/**
 * Получить отзывы о фитнес студии из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $request SQL запрос
 *
 * @return array
 */
function get_fitness_reviews($con) {
  $sql = "SELECT * FROM fitness_reviews ORDER BY id ASC;";

  $fitness_reviews = db_run_query($con, $sql);
  return $fitness_reviews;
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
  $sql = "SELECT * FROM news WHERE news.id = $id;";
  $news_element = db_run_query($con, $sql);
  return $news_element;
}

/**
 * Получить расписание тренировок по йоге из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $request SQL запрос
 *
 * @return array
 */
function get_schedule ($con) {
  $sql = "SELECT * FROM schedule ORDER BY id ASC;";

  $schedule = db_run_query($con, $sql);
  return $schedule;
}

/**
 * Получить расписание фитнес тренировок из базы.
 *
 * @param object $con Ссылка для подключения к базе данных
 *
 * @param string $request SQL запрос
 *
 * @return array
 */
function get_fitness_schedule($con) {
  $sql = "SELECT * FROM fitness_schedule ORDER BY id ASC;";

  $schedule = db_run_query($con, $sql);
  return $schedule;
}

/**
 * Получить расписание занятий для конкретного дня недели
 * @param string $day день недели
 * @param array $array массив - список существующих занятий
 *
 * @return array
 */
function get_day_schedule ($day, $array) {
  $day_schedule = [];

  foreach ($array as $array_element) {
    if ($array_element['week_day'] === $day) {
      array_push($day_schedule, $array_element);
    }
  }

  return $day_schedule;
}

/**
 * Получить виды абонементов из базы.
 *
 * @param object $con Ссылка для подключения к базе данных
 *
 * @return array
 */
function get_subscribtions($con) {
    $sql = "SELECT * FROM subscribtions ORDER BY id ASC;";

    $subscribtions = db_run_query($con, $sql);
    return $subscribtions;
}

/**
 * Получить преподавателей йоги из базы.
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $branch направление по которому работатет инструктор
 *
 * @return array
 */
function get_instructors ($con, $branch) {
    $sql = "SELECT * FROM instructors WHERE instructors.branch = '$branch' ORDER BY id ASC;";

    $instructors = db_run_query($con, $sql);
    return $instructors;
}

/**
 * Получить направления из базы.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param string $branch основное направление
 *
 * @return array
 */
function get_branches ($con, $branch) {
    $sql = "SELECT * FROM branches WHERE branches.branch = '$branch' ORDER BY id ASC;";

    $branches = db_run_query($con, $sql);
    return $branches;
}
