<?php require_once 'inc/lib.inc.php'; ?>

<?php 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cols = abs((int) $_POST['cols']);
    $rows = abs((int) $_POST['rows']);
    $color = trim(strip_tags($_POST['color']));
  }

  $cols = ($cols) ? $cols : 10;
  $rows = ($rows) ? $rows : 10;
  $color = ($color) ? $color : 'yellow';

 ?>
<!-- <!DOCTYPE html>
<html> -->

<!-- <head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <style>
  	.my-table {
  		margin: 30px 0 0 0;
  	}
	.my-table, tr, td {
		border: 1px solid red;
	}
	.my-table td {
		width: 40px;
		height: 40px;
		text-align: center;
		
	}
  </style>
</head>

<body>

  <div id="header"> -->
    <!-- Верхняя часть страницы -->
<!--     <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span> -->
    <!-- Верхняя часть страницы -->
<!--   </div>

  <div id="content"> -->
    <!-- Заголовок -->
 <!--    <h1>Таблица умножения</h1> -->
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php //echo $_SERVER['REQUEST_URI'] ?>
    <form action="<?= $_SERVER['REQUEST_URI']?>" method = "POST">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="<?= $cols?>" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="<?= $rows?>" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="<?= $color?>" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->

    <?php 
    drawTable($cols, $rows, $color);
     ?>
   <!--  <table border='1' width="200">
      <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>8</td>
        <td>10</td>
      </tr>
      <tr>
        <td>3</td>
        <td>6</td>
        <td>9</td>
        <td>12</td>
        <td>15</td>
      </tr>
      <tr>
        <td>4</td>
        <td>8</td>
        <td>12</td>
        <td>16</td>
        <td>10</td>
      </tr>
      <tr>
        <td>5</td>
        <td>10</td>
        <td>15</td>
        <td>20</td>
        <td>25</td>
      </tr>
    </table> -->
    <!-- Таблица -->
    <!-- Область основного контента -->
<!--   </div>
  <div id="nav">
    <h2>Навигация по сайту</h2> -->
    <!-- Меню -->
<!--     <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul> -->
    <!-- Меню -->
<!--   </div>
  <div id="footer"> -->
    <!-- Нижняя часть страницы -->
 <!--    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015 -->
    <!-- Нижняя часть страницы -->
<!--   </div>
</body>

</html> -->