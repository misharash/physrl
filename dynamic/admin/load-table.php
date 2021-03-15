<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
<script type="text/javascript">
function nextStep(chFile) {
<!--
window.location="../admin/update-tables.php?t="+chFile;
//-->
}
</script>
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Редактирование таблиц</h2>
Шаг первый. Загрузите файл и внесите в него необходимые изменения с помощью
единственно кошерной программы Killink CSV Editor (<a href="https://dl.dropboxusercontent.com/u/26691654/ForPhysrlTk/Killink_CSV_Editor.zip">качать тут</a>, только Win).
Обязательно прочитайте readme.txt из этого архива и следуйте его инструкциям, иначе отображение будет некорректным.<br />
Не забудьте проверить, не редактирует ли его сейчас другой админ!<br />
Как только будете готовы, нажмите "Обновить" возле файла, который хотите обновить.
<ul>
<li><a href="../pages/tables/dz.csv">ДЗ</a> <input type=button value="Обновить" onClick="nextStep('dz');" /></li>
<li><a href="../pages/tables/routine.csv">Расписание уроков</a> <input type=button value="Обновить" onClick="nextStep('routine');" /></li>
<li><a href="../pages/tables/summer.csv">Летнее задание</a> <input type=button value="Обновить" onClick="nextStep('summer');" /></li>
<li><a href="../pages/tables/pract.csv">Учебная практика</a> <input type=button value="Обновить" onClick="nextStep('pract');" /></li>
<li><a href="../pages/tables/teachers.csv">Учителя</a> <input type=button value="Обновить" onClick="nextStep('teachers');" /></li>
</ul>
Последние действия с таблицами:
<br /><iframe class=log src='viewlog.php?l=table'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe>

</body>
</html> <?php } ?>