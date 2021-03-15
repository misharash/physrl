<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Манипулирование бэкапами</h2>
Шаг 3. Бэкап, собссна.<br />
Если вы ничего плохого не видите, то все было хорошо.

<?php
copy($_GET["b"],$_GET["r"]);
?>

<ul>
<li><a href="panel.php">Вернуться к панели админа</a></li>
<li><a href="backup-ch-cont.php">Вернуться к манипулированию бэкапами</a></li>
</ul>
<?php
$logadd=fopen("logs/backup.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." возвратил ".$_GET["r"]." к версии ".$_GET["b"]." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия с бэкапами:
<br /><iframe class=log src='viewlog.php?l=backup'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>
<iframe src='../update.php' style='display:none'>Updating static pages</iframe>

</body>
</html> <?php } ?>