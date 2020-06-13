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
 * Добавить новость в базу данных.
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $title
 * @param string $news_context
 * @param string $image
 * @param string $date
 * @param string $timing
 * @param string $fb_link
 *
 * @return object|false
 */
function db_insert_news ($con, $title, $news_context, $image, $date, $timing, $fb_link) {

  $filtered_title = mysqli_real_escape_string($con, $title);
  $filtered_news_context = mysqli_real_escape_string($con, $news_context);
  $filtered_image = mysqli_real_escape_string($con, $image);
  $filtered_date = mysqli_real_escape_string($con, $date);
  $filtered_timing = mysqli_real_escape_string($con, $timing);
  $filtered_fb_link = mysqli_real_escape_string($con, $fb_link);
  $sql = "
    INSERT INTO news SET
    title = '$filtered_title',
    news_context = '$filtered_news_context',
    image = '$filtered_image',
    date = '$filtered_date',
    timing = '$filtered_timing',
    fb_link = '$filtered_fb_link';";
  $res = mysqli_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

/**
 * Добавить новость в архив
 *
 * @param object $con Ссылка для подключения к базе данных
 * @param string $title
 * @param string $news_context
 * @param string $image
 * @param string $date
 * @param string $timing
 * @param string $fb_link
 *
 * @return object|false
 */
function db_archive_news ($con, $title, $news_context, $image, $date, $timing) {

  $filtered_title = mysqli_real_escape_string($con, $title);
  $filtered_news_context = mysqli_real_escape_string($con, $news_context);
  $filtered_image = mysqli_real_escape_string($con, $image);
  $filtered_date = mysqli_real_escape_string($con, $date);
  $filtered_timing = mysqli_real_escape_string($con, $timing);
 
  $sql = "
    INSERT INTO news_archive SET
    title = '$filtered_title',
    news_context = '$filtered_news_context',
    image = '$filtered_image',
    date = '$filtered_date',
    timing = '$filtered_timing';";
  $res = mysqli_query($con, $sql);

  if (!$res) {
    $error = mysqli_error($con);
    print("Ошибка MySQL" . $error);
    die();
  }
  return $res;
}

/**
 * Вычислить не закончилось ли время для показа новости.
 *
 * @param string $time Время окончания показа новости.
 *
 * @return boolean
 */
function is_time_left ($time) {

  $time_left = strtotime($time) - time();
  if ($time_left > 0) {
    return true;
  }
  return false;
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
 *
 * @return array
 */
function get_all_reviews ($con) {
  $sql = "SELECT * FROM reviews ORDER BY id ASC;";
  $reviews = db_run_query($con, $sql);
  return $reviews;
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

function db_delete_news ($con, $id) {
  $sql = "DELETE FROM news WHERE news.id = $id;";
  $res = mysqli_query($con, $sql);
  return $res;
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

function get_actual_news ($con) {
  $actual_news = [];
  $news_list = get_news($con);
  foreach ($news_list as $news_element) {
    if ( is_time_left ($news_element['date'])) {
      array_push($actual_news, $news_element);
    } else {
      db_archive_news($con, $news_element['title'], $news_element['news_context'], $news_element['image'],
        $news_element['date'], $news_element['timing']);
      db_delete_news($con, $news_element['id']);
    }
  }
  return $actual_news;
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
 * Найти новость по id в базе данных.
 *
 * @param object $con Ссылка для подключения к базе данных *
 * @param integer $id ID новости
 *
 * @return array|false
 */
function get_news_by_id ($con, $id) {

  $sql = "
    SELECT * FROM news WHERE id = $id;";
  $news_element = db_run_query($con, $sql);

  if (count($news_element)) {
    return $news_element[0];
  } 
  return false;
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
 *
 * @return array
 */
function get_all_instructors ($con) {
    $sql = "SELECT * FROM instructors ORDER BY id ASC;";
    $instructors = db_run_query($con, $sql);
    return $instructors;
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
