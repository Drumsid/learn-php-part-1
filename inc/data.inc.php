<?php 

	// Установка локалки и выбор значения даты.
	setlocale(LC_ALL, "russian");
	$day = strftime('%d');
	$mon = strftime('%B');// отдаст значение в кодеровке win-1251 поэтому пропускаем значение через функцию iconv
	$mon = iconv('windows-1251', 'UTF-8', $mon);
	$year = strftime('%Y');

  $hours = (int) strftime('%H'); // Получаем текущий час в виде строки от 00 до 23  и приводим строку к целому числу от 0 до 23 
  $welcome = '';

  if ( $hours >= 6 && $hours < 12 ) {
    $welcome = "Доброе утро,";
  } elseif ( $hours >= 12 && $hours < 18 ) {
    $welcome = "Добрый день,";
  }  elseif ($hours >= 18 && $hours < 23) {
    $welcome = "Добрый вечер,";
  } else {
    $welcome = "Доброй ночи,";
  }
  


 ?>