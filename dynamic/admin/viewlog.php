<html>
<head>
<title>Утилита просмотра логов админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body>
<?php $f1_arr=file("logs/".$_GET["l"].".log"); for ($i=count($f1_arr)-1;$i>=0;$i--) {echo ($f1_arr[$i]."\r\n");} ?>
</body></html>