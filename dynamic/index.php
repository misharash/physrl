<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
$path=$_GET["p"];
if ($path=="") {$path="index";};
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php if (strlen($_GET["file"])>0) {echo "(Архив) ";} readfile("titles/".$path.".txt"); ?>11-Ф класс Ришельевского лицея</title>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<link href="/physrl/favicon.ico" rel="icon" type="image/x-icon" />
<link href="/physrl/style.css" rel="stylesheet" type="text/css" />


</head>
<body>

<table>
<tr id='title'><td colspan='3'>
<img src="/physrl/logo.png" alt="11-Ф" />
<h1><span class='sitetitle'>11-Ф класс Ришельевского лицея</span><br /><span class='sitetitle'>выпуск 2015</span></h1>
</td></tr>
<tr id='main'>
<td id='backpanel'>
<div id='sitemap'>
<h3 class='bp-title'>Навигация</h3>
<ul>
<li><a href="/physrl/dynamic/?m=0">Новости</a></li>
<li><a href="/physrl/dynamic/?p=dz">Домашнее задание</a></li>
<li><a href="/physrl/dynamic/?p=routine">Расписание уроков</a></li>
<li><a href="/physrl/dynamic/?p=teachers">Наши учителя</a></li>
<li><a href="/physrl/dynamic/?p=students">Наш класс</a></li>
<li><a href="/physrl/dynamic/?p=lib">Электронная библиотека</a></li>
<li><a href="/physrl/dynamic/?p=photo">Архив фотографий</a></li>
<li><a href="/physrl/dynamic/?p=olymp">Олимпиадные задания</a></li>
<li><a href="/physrl/dynamic/?p=summer">Задание на лето</a></li>
<li><a href="/physrl/dynamic/?p=pract">Учебная практика</a></li>
<li><a href="/physrl/dynamic/?p=archive">Архив материалов</a></li>
</ul>
</div>
<div id='empty-div'></div>
<div id='classlinks'>
<h3 class='bp-title'>См. также</h3>
<ul>
<li><a href="http://fima7.at.ua">Официальный сайт класса</a></li>
<li><a href="http://rl.odessa.ua">Сайт Ришельевского лицея</a></li>
<li><a href="https://sites.google.com/site/fiziceskijklass1015">Архивная версия сайта</a></li>
</ul>
</div>

</td>
<td id='empty'></td>
<td id='main-content-ext'>
<div id='main-content'>
<?php if (file_exists("pages/".$path.".php")) {require("pages/".$path.".php");}; ?>


</div>
</td>
</tr>
<tr id='credits'><td colspan='3'>
<span id='credits_str'>Обновлено <?php $timestamp=date("<b>d.m.Y</b>, <b>H:i:s</b>",time()+10800); echo $timestamp; ?> по одесскому времени.<br />
Разработка и дизайн <b>Рашковецкого Михаила</b> с использованием наработок <b>Кирчева Ростислава</b>, <b>2013</b>.<br  />
Редакторы содержимого: <b>Рашковецкий Михаил</b>, <b>Козачок Ярослав</b>, <b>Бурачковский Павел</b>.</span>
</td></tr>
</table>

</body>
</html>
