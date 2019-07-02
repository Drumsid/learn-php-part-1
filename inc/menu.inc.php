    <h2>Навигация по сайту</h2>
    <!-- Меню -->
   
    
<!--     <ul> вариант создания меню без цикла foreach
      <li><a href='<?=$left_menu[0]['href']?>'><?=$left_menu[0]['link']?></a>
      </li>
      <li><a href='<?=$left_menu[1]['href']?>'><?=$left_menu[1]['link']?></a>
      </li>
      <li><a href='<?=$left_menu[2]['href']?>'><?=$left_menu[2]['link']?></a>
      </li>
      <li><a href='<?=$left_menu[3]['href']?>'><?=$left_menu[3]['link']?></a>
      </li>
      <li><a href='<?=$left_menu[4]['href']?>'><?=$left_menu[4]['link']?></a>
      </li>
    </ul> -->
      <?php 

   if (!drawMenu($left_menu)) {
    trigger_error("Что-то случилось", E_USER_ERROR);// Отлавливаем ошибки
   }

   ?>
    <!-- Меню -->