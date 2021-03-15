<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Манипулирование бэкапами</h2>
Шаг 1. Выберите ресурс, который необюходимо вернуть к старой версии.<br />

<br />
<h3>Исходник страницы</h3>
<ul>
<li><a href="backup-ch-vers.php?s=c&t=index">Новости</a></li>
<li><a href="backup-ch-vers.php?s=c&t=dz">Домашнее задание</a></li>
<li><a href="backup-ch-vers.php?s=c&t=routine">Расписание уроков</a></li>
<li><a href="backup-ch-vers.php?s=c&t=phys">Мы - ФИЗИКИ</a></li>
<li><a href="backup-ch-vers.php?s=c&t=lyc">Мы - лицеисты</a></li>
<li><a href="backup-ch-vers.php?s=c&t=teachers">Наши учителя</a></li>
<li><a href="backup-ch-vers.php?s=c&t=students">Наш класс</a></li>
<li><a href="backup-ch-vers.php?s=c&t=lib">Электронная библиотека</a></li>
<li><a href="backup-ch-vers.php?s=c&t=photo">Архив фотографий</a></li>
<li><a href="backup-ch-vers.php?s=c&t=summer">Задание на лето</a></li>
<li><a href="backup-ch-vers.php?s=c&t=pract">Учебная практика</a></li>
<li><a href="backup-ch-vers.php?s=c&t=olymp">Олимпиадные задания</a></li>
</ul>

<br />
<h3>Таблицы</h3>
<ul>
<option value='dz'>ДЗ</option>
<option value='routine'>Расписание</option>
<option value='summer'>Летнее задание</option>
<option value='pract'>Практика</option>
<option value='teachers'>Учителя</option>

<li><a href="backup-ch-vers.php?s=t&t=dz">Домашнее задание</a></li>
<li><a href="backup-ch-vers.php?s=t&t=routine">Расписание уроков</a></li>
<li><a href="backup-ch-vers.php?s=t&t=summer">Летнее задание</a></li>
<li><a href="backup-ch-vers.php?s=t&t=pract">Практика</a></li>
<li><a href="backup-ch-vers.php?s=t&t=teachers">Учителя</a></li>
</ul>

<br />
<h3>Новости</h3>
<?php $num=file("../pages/news/number.txt");
$n=intval($num[0]); ?>
<ul>
<?php
for ($i=$n;$i>0;$i--) {echo ("<li><a href='backup-ch-vers.php?s=n&t=".$i."'>Новость под номером ".$i."</a></li>\r\n");};
?>
</ul>
Последние действия с бэкапами:
<br /><iframe class=log src='viewlog.php?l=backup'>Ваш браузер негодный. Обновите его, чтобы все узреть.


</body>
</html> <?php } ?>