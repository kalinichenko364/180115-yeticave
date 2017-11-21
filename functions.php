<?php

//Обрезание текста
function cut_text($text, $num_letters) {
  $num = mb_strlen($text);
  
  if ($num = $num_letters) {
    $text = mb_stristr($text, 0, $num_letters);
    $text .= "...";
  }
  return $text;
}

//Функция сборки
function include_template($tempName, $paramsArray) {
  
  extract($paramsArray);
  $result='';
  if ( !file_exists($tempName) ) {
    return $result;
  }
  
  if ( isset($paramsArray) ) {
    ob_start();
      include_once $tempName;
      $result=ob_get_clean();
  }
  return $result;
}
