<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Редактор исходного кода онлайн</h2>
Не думаю, что у вас возникнут какие-либо вопросы по поводу.<br />
<form method=post action='code-saver.php?t=<?php echo $_GET["t"]; ?>'>
<textarea name=phppagecode cols=90 rows=90><?php readfile("../pages/".$_GET["t"].".php"); ?></textarea><br />
<input type=submit value="СОХРАНИТЬ">
</form>

<?php
//Backup creating
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy("../pages/".$_GET["t"].".php","../pages/backup/".$_GET["t"]."_".$timemark.".php");
?>
<?php
$logadd=fopen("logs/pages.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." начал редактировать страницу ".$_GET["t"]." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия со страницами:
<br /><iframe class=log src='viewlog.php?l=pages'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>

</body>
</html> <?php } ?>
