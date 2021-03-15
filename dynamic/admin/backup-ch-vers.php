<!DOCTYPE html>
<html> <?php require "logcheck.php"; if ($logaccept) { ?>
<head>
<title>Панель админа 10-Ф</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body style="text-align:center;font-size:15pt;">
<div class='backpanel-admin' style='float:left;margin:15px;'><?php require "backpanel.php"; ?></div>
<h2>Манипулирование бэкапами</h2>
Шаг 2. Выберите версию, к которой надо вернуться.<br />

<?php
//setting the search path
$spath="../pages/";
if ($_GET["s"]=="t") {$spath=$spath."tables/";};
if ($_GET["s"]=="n") {$spath=$spath."news/";};
$npath=$spath;
$spath=$spath."backup/";

//setting the filename filter
$sname=$_GET["t"]."_";
if ($_GET["s"]=="n") {$sname="number".$sname;};

//giving the extension
$ext=".php";
if ($_GET["s"]=="t") {$ext=".csv";};
if ($_GET["s"]=="n") {$ext=".txt";};

$entries = scandir($spath);
$filelist = array();
foreach($entries as $entry) {
    if (strpos($entry, $sname) === 0) {
        $filelist[] = $entry;
    }
}
?>

<ol>
<?php
for ($i=count($filelist)-1;$i>=0;$i--) {echo ("<li><a href='backup-make.php?r=".$npath.$_GET["t"].$ext."&b=".$spath.$filelist[$i]."'>".$filelist[$i]."</a>");
if ($_GET["s"]=="t") {echo (" <a href='../?p=".$_GET["t"]."&file=pages/tables/backup/".$filelist[$i]."'>просмотр</a>");}
echo ("</li>");
}

?>

</ol>
Последние действия с бэкапами:
<br /><iframe class=log src='viewlog.php?l=backup'>Ваш браузер негодный. Обновите его, чтобы все узреть.


</body>
</html> <?php } ?>
