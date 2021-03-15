<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Быстрый редактор таблиц (онлайн)</h2>
Шаг 1. Редактирование таблицы.<br />
Напоминаем, вы обновляете таблицу 
<?php
if ($_GET["t"]=="dz") {$mat="ДЗ.";};
if ($_GET["t"]=="routine") {$mat="расписания уроков.";};
if ($_GET["t"]=="summer") {$mat="летнего задания.";};
if ($_GET["t"]=="pract") {$mat="об учебной практике.";};
if ($_GET["t"]=="teachers") {$mat="учителей.";};
echo $mat;
?>
<form method=post action='fast-table-saving.php?t=<?php echo $_GET["t"] ?>' enctype='multipart/form-data'>
<table>
<?php
//This is an universal online CSV editor script
$filename="../pages/tables/".$_GET["t"].".csv";
$enter_file=fopen($filename,"r");
$j=0;
while (!feof($enter_file)) {
echo ("<tr>\r\n");
$enter_now=fgetcsv($enter_file,0,";");
$j++;
for ($i=0;$i<count($enter_now);$i++) {echo ("<td><textarea name=r".$j."c".$i." cols=30>".$enter_now[$i]."</textarea></td>\r\n");};
if ($i>$c) {$c=$i;};
echo ("</tr>\r\n");
}
fclose($enter_file);
//Backup creating
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy($filename,"../pages/tables/backup/".$_GET["t"]."_".$timemark.".csv");
?>
</table>
<input type=text style="display:none" name=r value=<?php echo $j; ?> />
<input type=text style="display:none" name=c value=<?php echo $c; ?> />
<input type=submit value=Сохранить />
</form>
<?php
$logadd=fopen("logs/table.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." открывает в быстром редакторе ".$mat." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия с таблицами:
<br /><iframe class=log src='viewlog.php?l=table'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>


</body>
</html> <?php } ?>
