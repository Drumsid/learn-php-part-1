    <?php 
      if (!drawMenu($left_menu, false)) {
      	trigger_error("Что-то случилось", E_USER_ERROR);// Отлавливаем ошибки
      }
     ?>
    &copy; Супер Мега Веб-мастер, 2000 &ndash; <?= $year; ?>