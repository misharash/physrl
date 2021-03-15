<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>

<table>
<tr>
<td>История изменения новостей</td>
<td>История изменения таблиц</td>
</tr>
<tr>
<td style="vertical-align:top;"><iframe class=log src='viewlog.php?l=news'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe></td>
<td style="vertical-align:top;"><iframe class=log src='viewlog.php?l=table'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe></td>
</tr>
<td>История бэкапов</td>
<td>История изменения страниц</td>
</tr>
<tr>
<td style="vertical-align:top;"><iframe class=log src='viewlog.php?l=backup'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe></td>
<td style="vertical-align:top;"><iframe class=log src='viewlog.php?l=pages'>Ваш браузер негодный. Обновите его, чтобы все узреть.</iframe></td>
</tr>
</table>


</body>
</html> <?php } ?>