﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Фотогалерея готовый шаблон сайта. Просмотр фото. Автоматическое увеличение при нажатии</title>
  <meta name="description" content="Создайте свой сайт с фотогалереей. Админка и файловый менеджер. Загрузка фото на сервер" />
  <meta name="keywords" content="фотогалерея, загрузка, фото, картинки, файл" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css" media="screen" />  
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.2.1.js"></script>
  <script type="text/javascript">
$(document).ready(function () {
    $("a.group").fancybox();
});
</script>

</head>

<body>
<a name="begin"></a>

<div id="main">

<!-- Шапка -->
<div id="banner">
<div id="welcome">
<a href="/" class="logo"></a> <h1>Фотогалерея. Настройка фото</h1>
</div>
</div>
<!-- Конец шапка -->	
<br />

<!-- Блок меню см. папку inc --> 
<? include "inc/menu.php"; ?>
<!-- Конец блок меню -->

<div id="site_content">	
 <div id="content">
   <div class="content_item">
     <h2>Ваши фотографии, картинки в личной фотогалереи</h2>       
 
<!-- Блок галереи см. папку inc -->        
<? include "inc/gallery.php"; ?>
<!-- Клонец блок галереи -->
<p>Перед Вами превью крупных изображений. Нажмите на любую из уменьшенных картинок и она увеличится до своего натурального размера.<br />
Навигация просмотра вправо и влево на увеличенном изображении. Клик по центру возвращает размер в исходное положение.</p>
<p>Размер уменьшенных копий изображений 140x140 пиксел. При загрузке их на сервер необходимо соблюдать эти размеры или произвести небольшую модерацию в коде страницы и файле стилей .css</p>
<div class="quote">Можно не создавать превью (уменьшенные копии), но тогда изображение уменьшится пропорционально своим размерам, а это может исказить его. Также незначительно пострадает его качество, как результат принудительного уменьшения.</div>
<br />
<p>Подробное описание работы с галереей в инструкции, приложенной к шаблону сайта.</p>		
  </div>
 </div>
</div>

<!-- Нижние блоки см. папку inc -->
<? include "inc/footer-blocks.php"; ?>
<!-- Конец нижние блоки -->

<!-- Подвал см. папку inc -->   
<? include "inc/footer.php"; ?>
<!-- Подвал -->	
  
</body>
</html>
