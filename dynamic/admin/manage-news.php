<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Управление новостями</h2>
Шаг 1. Выберите новость для редактирования.
<?php $num=file("../pages/news/number.txt");
$n=intval($num[0]); ?>
<ul>
<li><a href="edit-new.php?n=<?php echo ($n+1); ?>&act=new">Создать новую</a></li>
<?php
for ($i=$n;$i>0;$i--) {echo ("<li><a href='edit-new.php?n=".$i."'>Новость под номером ".$i."</a></li>\r\n");};
?>
</ul>
Последние действия с новостями:
<br /><iframe class=log src='viewlog.php?l=news'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>

</body>
</html> <?php } ?>