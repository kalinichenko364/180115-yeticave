<?php

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';

// устанавливаем часовой пояс в Московское время
date_default_timezone_set('Europe/Moscow');

// записать в эту переменную оставшееся время в этом формате (ЧЧ:ММ)
$lot_time_remaining = "00:00";

// временная метка для полночи следующего дня
$tomorrow = strtotime('tomorrow midnight');

// временная метка для настоящего времени
$now = strtotime('now');

// далее нужно вычислить оставшееся время до начала следующих суток и записать его в переменную $lot_time_remaining
$lot_time_remaining = gmdate("H:i", $tomorrow - $now);


require_once('data.php');
require_once('functions.php');

//require_once('config.php');


//Отключение страницы
//if ($config['enable']) {
//  $content = require_once($config['tpl_path'] . 'layout.php');
//}
//else {
//  $error_msg = "Сайт на техническом обслуживании";
//  $content = require_once($config['tpl_path'] . 'off.php');
//}
//print($content);


//Сборка шаблона главной страницы
$page_content = include_template('templates/index.php', [
  'categories' => $categories,
  'lots' => $lots,
  'lot_time_remaining' => $lot_time_remaining
]);

$layout_content = include_template('templates/layout.php', [
  'main_content' => $page_content,
  'categories' => $categories,
  'title' => 'YetiCave - Главная страница',
  'is_auth' => $is_auth,
  'user_name' => $user_name,
  'user_avatar' => $user_avatar
]);

print($layout_content);
