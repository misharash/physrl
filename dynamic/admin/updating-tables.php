﻿<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Редактирование таблиц</h2>
Шаг 3. Завершение.<br />
Напоминаем, вы обновляете таблицу 
<?php
if ($_GET["t"]=="dz") {$mat="ДЗ.";};
if ($_GET["t"]=="routine") {$mat="расписания уроков.";};
if ($_GET["t"]=="summer") {$mat="летнего задания.";};
if ($_GET["t"]=="pract") {$mat="об учебной практике.";};
if ($_GET["t"]=="teachers") {$mat="учителей.";};
echo $mat;
?><br />
<?php
copy($_FILES['uploadfile']['tmp_name'],"../pages/tables/".$_GET["t"].".csv");

//Backup creating
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy("../pages/tables/".$_GET["t"].".csv","../pages/tables/backup/".$_GET["t"]."_".$timemark.".csv");
?>
Если вы не видите ничего нехорошего, ваш файл успешно загружен.
<ul>
<li><a href="panel.php">Вернуться к панели админа</a></li>
<li><a href="load-table.php">Вернуться к обновлению таблиц</a></li>
</ul>
<?php
$logadd=fopen("logs/table.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." обновил(а) ".$mat." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия с таблицами:
<br /><iframe class=log src='viewlog.php?l=table'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>
<iframe src='../update.php' style='display:none'>Updating static pages</iframe>

</body>
</html> <?php } ?>
