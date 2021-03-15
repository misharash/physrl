<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Сохранение кода</h2>
Если ничего плохого нет, то, видимо, все норм.
<?php
$saveit=fopen("../pages/".$_GET["t"].".php","w");
fwrite($saveit,$_POST["phppagecode"]);
fclose($saveit);

//Backup creating
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy("../pages/".$_GET["t"].".php","../pages/backup/".$_GET["t"]."_".$timemark.".php");
?>
<ul>
<li><a href="panel.php">Вернуться к панели админа</a></li>
</ul>
<?php
$logadd=fopen("logs/pages.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." сохранил страницу ".$_GET["t"]." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия со страницами:
<br /><iframe class=log src='viewlog.php?l=pages'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>
<iframe src='../update.php' style='display:none'>Updating static pages</iframe>

</body>
</html> <?php } ?>
