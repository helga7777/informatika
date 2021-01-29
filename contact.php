﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Обратная связь. Отправить сообщение. Готовый шаблон сайта</title>
  <meta name="description" content="Шаблон обратной связи на сайте. Смотреть в работе" />
  <meta name="keywords" content="обратная связь, настройка, отправить, сообщение, с сайта" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

<!-- Скрипт всплывающего окна -->
<script type="text/javascript">
 function newPopup(url) {
 popupWindow = window.open(
 url,'popUpWindow','height=800,width=600,left=350,top=90,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
 }
</script> 
<!-- Конец скрипта POP окна -->

</head>

<body>
<a name="begin"></a>

<div id="main">

<!-- Шапка -->  
<div id="banner">

<div id="welcome">
<a href="/" class="logo"></a> <h1>Установка обратной связи</h1>
</div>

</div>	
<br />
<!-- Конец шапка -->

<!-- Блок меню см. папку inc --> 
<? include "inc/menu.php"; ?>
<!-- Конец блок меню -->

<!-- Контент -->
<div id="site_content">	
<div id="content">

<!-- Контейнер с обр. связью-->
        <div class="content_item">
		  <div class="form_settings">
            <h3 align="center">Отправить сообщение Администратору сайта</h3>
            <p align="center">
            <a href="JavaScript:newPopup('smail/index.php');">   <!-- Вызывает всплывающее POP окно -->
            <img src="images/e-mail.png" alt="Написать сообщение" /><br />  <!-- Картинка почты -->
			<b>Открыть форму</b>
			</a>
			</p>
			<br /><br />
			<p>Настройка скрипта обратной связи довольно простая:<br />
			- Открываете файл конфигурации (см. инструкцию к шаблону сайта) с помощью любого текстового редактора;<br />
			- Заменяете указанный email адрес на свой. Можно указывать любой почтовый сервер (mail.ru, yandex.ru, yahoo и т.д.), на который желаете получать письма с сайта;
			- Сохраняете файл, загружаете на сервер.
			</p>
			<p>Инструкция по редактированию внешнего вида формы отправки прилагается с шаблоном этого сайта.</p>
          </div>
        </div>
<!-- Контейнер -->

</div>
</div>
<!-- Конец контент -->

<!-- Нижние блоки см. папку inc -->
<? include "inc/footer-blocks.php"; ?>
<!-- Конец нижние блоки -->

<!-- Подвал см. папку inc -->   
<? include "inc/footer.php"; ?>
<!-- Подвал -->
  
</body>
</html>