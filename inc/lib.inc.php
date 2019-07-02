<?php 
//Пользовательская фукция перехвата ошибок
function myError($errno, $errmsg, $errfile, $errline){
// Логгируем пользовательские ошибки
switch ($errno) {
    case E_USER_ERROR:
    case E_USER_WARNING:
    case E_USER_NOTICE:
        echo "Ошибка";
        $s = date("d-m-Y H:i:s") . " - $errmsg в $errfile в строке: $errline"; //создание сообщения об ошибке в файл error.log
        error_log("$s\n", 3, "error.log");

    }
}


//Пользовательская фукция распечатки таблицы
function drawTable($cols = 10, $rows = 10, $color = "yellow") {
	echo "<table class = 'my-table' >";
    	for ($tr = 1; $tr <= $rows; $tr++) {
    		echo "<tr>";
    		for ($td = 1; $td <= $cols; $td++) {
    			if ($td == 1 || $tr == 1)
    				echo "<td style = 'background-color: $color;'><b>" . $tr * $td .  "</b></td>";
    			 else	
    			 	echo "<td>" . $tr * $td .  "</td>";
    		}
    		echo "</tr>";
    	}
    echo "</table>";
}

 ?>
  <?php 
    $left_menu = [
        ['link' => 'Домой', 'href' => 'index.php'],
        ['link' => 'О нас', 'href' => 'index.php?id=about'],
        ['link' => 'Контакты', 'href' => 'index.php?id=contact'],
        ['link' => 'Таблица умножения', 'href' => 'index.php?id=table'],
        ['link' => 'Калькулятор', 'href' => 'index.php?id=calc'],
    ];

// function creae menu vertical or gorizontal
    function drawMenu ($menu, $vertical = true) {
        if (!is_array($menu)) {
            return false;
        }
      $style = "";
      if (!$vertical) {
        $style = " style = 'display: inline; margin: 0 15px 0 0;'";
      }
        echo "<ul>";
          foreach ($menu as $item) {
            echo "<li$style><a href='{$item['href']}'>{$item['link']}</a></li>";
            // echo "<a href='{$item['href']}'>{$item['link']}</a>";
            // echo "</li>";
          }
        echo "</ul>";
        return true;
    }
     ?>