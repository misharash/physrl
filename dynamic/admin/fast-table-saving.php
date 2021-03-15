<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Быстрый редактор таблиц</h2>
Шаг 2. Сохранение.<br />
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
$r=intval($_POST["r"]);
$c=intval($_POST["c"]);
$edittable=fopen("../pages/tables/".$_GET["t"].".csv","w");
for ($i=1;$i<$r;$i++) {
for ($j=0;$j<$c;$j++) {
$str_now=$_POST["r".$i."c".$j];
$str_now=str_replace("\r","",$str_now);
$str_now=str_replace("\n","",$str_now);
if (false===strpos($str_now," ")) {$str_now=$str_now." ";};
$write_array[$j]=$str_now;
}
fputcsv($edittable,$write_array,";",'"');
}
fclose($edittable);

//Backup creating
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy("../pages/tables/".$_GET["t"].".csv","../pages/tables/backup/".$_GET["t"]."_".$timemark.".csv");
?>
Если вы не видите ничего нехорошего, ваш файл успешно загружен.
<ul>
<li><a href="panel.php">Вернуться к панели админа</a></li>
</ul>
<?php
$logadd=fopen("logs/table.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." завершил быстрое редактирование ".$mat." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия с таблицами:
<br /><iframe class=log src='viewlog.php?l=table'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>
<iframe src='../update.php' style='display:none'>Updating static pages</iframe>

</body>
</html> <?php } ?>
