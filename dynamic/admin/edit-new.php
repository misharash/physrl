<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />

</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<?php
if (!$_GET["act"]) {$newtext=file("../pages/news/".$_GET["n"].".txt");}
?>
<h2>Редактор новости</h2>
Шаг 2. Отредактируйте код этой новости.
<form method=post action="save-new.php?n=<?php echo $_GET["n"]; if ($_GET["act"]) {echo ("&act=new");}; ?>">
Заголовок: <input type=text name=title size=35 value="<?php if (!$_GET["act"]) {echo $newtext[0];} ?>" /><br />
Текст:<br />
<textarea name=message cols=60 rows=10>
<?php
if (!$_GET["act"]) {
for ($i=1;$i<count($newtext);$i++) {echo $newtext[$i];}
}
//Backup creating
if (!$_GET["act"]) {
$timemark=date("Y-m-d_H-i-s",time()+10800);
copy("../pages/news/".$_GET["n"].".txt","../pages/news/backup/number".$_GET["n"]."_".$timemark.".txt");
}
?>
</textarea><br />
<input type=submit value=Сохранить /><br />
<?php
$logadd=fopen("logs/news.log","a+");
$timestamp=date("d F Y, H-i-s",time()+10800);
fwrite($logadd,$_COOKIE["admin"]." начал редактировать новость №".$_GET["n"]." - ".$timestamp." по одесскому времени.<br />\r\n");
fclose($logadd);
?>
Последние действия с новостями:
<br /><iframe class=log src='viewlog.php?l=news'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>

</body>
</html> <?php } ?>
