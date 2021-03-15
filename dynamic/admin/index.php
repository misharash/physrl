<!DOCTYPE html>
<html>
<head>
<title>Нужно войти в систему.</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />
</head>
<body>
<?php
$logaccept=false;
$inst=fopen("codes.csv","r");
$count=0;
while (!feof($inst)) {
$count++;
$read_arr=fgetcsv($inst,0,';');
$user[$count]=$read_arr[0];
$code[$count]=str_replace(' ','',$read_arr[1]);
$time[$count]=intval(str_replace(' ','',$read_arr[2]));
}
fclose($inst);

$now=time()+25200;

for ($i=1;$i<=$count;$i++) {
if (($user[$i]==$_SERVER['REMOTE_ADDR'].' '.$_SERVER['HTTP_USER_AGENT'])&&($code[$i]==$_COOKIE['code'])&&($time[$i]>$now-600000)) {
$logaccept=true;
}
}

if ($logaccept) {
echo "Сейчас вы будете перенаправлены к панели админа, ибо уже вошли...
<script type='text/javascript' language='JavaScript'>
<!--
window.location='../admin/panel.php'
//-->
</script>";}
else {
echo "<h2>Авторизуйтесь как администратор сайта</h2>
<form method=post action='login.php'>
Идентификатор личности: <input type=text size=20 name=id id=id /><br />
Код доступа: <input type=password size=20 name=pw id=pw /><br />
<input type=submit value='Вход' />
</form>";};
?>

</body>
</html>