<!DOCTYPE html>
<html>
<head>
<title>Вход...</title>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8" />

</head>
<body style="background-color:#000000">
<?php
if ((($_POST["id"]=="misharash")&&($_POST["pw"]=="pricolist13"))||(($_POST["id"]=="anon")&&($_POST["pw"]=="popyachtsa"))||(($_POST["id"]=="ykozachok")&&($_POST["pw"]=="02011998"))||(($_POST["id"]=="wpal")&&($_POST["pw"]=="1234567"))||(($_POST["id"]=="alexandricar")&&($_POST["pw"]=="5782k9830sf"))) {

$code='';
for ($i=1;$i<85;$i++) {$code=$code.chr(rand(97,122));}

echo ("<script type='text/javascript'>
var date = new Date;
date.setDate( date.getDate() + 30 );
document.cookie='admin=".$_POST["id"]."; expires='+date.toUTCString();
document.cookie='code=".$code."; expires='+date.toUTCString();
alert ('Вы вошли! Посылаем Вас на панель админа.');
<!--
window.location='panel.php'
//-->
</script>");

$code=$code.' ';

$now=time()+25200;

$put_array[0]=$_SERVER['REMOTE_ADDR'].' '.$_SERVER['HTTP_USER_AGENT'];
$put_array[1]=$code;
$put_array[2]=$now.' ';
$put_array[3]=$_POST["id"].' ';

$note=fopen('codes.csv','a');
fputcsv($note,$put_array,';','"');
fclose($note);

}
else {
echo ("<script type='text/javascript'>
alert ('Какая-то ошибка. Попробуйте войти еще раз.');
<!--
window.location='../admin/'
//-->
</script>");}
?>

</body>
</html>
