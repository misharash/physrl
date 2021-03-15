<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Сохранение изменений</h2>
Ваши изменения сохраняются...<br />
Если никаких косяков не видно, то все хорошо.
<?php
$savenew=fopen("../pages/news/".$_GET["n"].".txt","w");
fwrite($savenew,$_POST["title"]."\r\n");
fwrite($savenew,$_POST["message"]);
fclose($savenew);

if ($_GET["act"]=="new") {
$nc=fopen("../pages/news/number.txt","w");
fwrite($nc,$_GET["n"]);
fclose($nc);
}

//Backup creating
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy("../pages/news/".$_GET["n"].".txt","../pages/news/backup/number".$_GET["n"]."_".$timemark.".txt");
?>
<ul>
<li><a href="panel.php">Вернуться к панели админа</a></li>
<li><a href="manage-news.php">Вернуться к манипулированию новостями</a></li>
</ul>
<?php
$logadd=fopen("logs/news.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." сохранил новость №".$_GET["n"]." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия с новостями:
<br /><iframe class=log src='viewlog.php?l=news'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>
<iframe src='../update.php' style='display:none'>Updating static pages</iframe>

</body>
</html> <?php } ?>
