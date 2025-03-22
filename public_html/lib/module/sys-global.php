<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/lib/module/menu/inc-menu-main.php";
   include_once($path);
   
   // Добавить принудительное скрытие мобильных элементов
   echo '<style>
     .mobile-menu-btn-open, 
     .mobile-menu-con-container, 
     .sidebar-btn-open { 
       display: none !important; 
     }
   </style>';
?>