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




if (!$logaccept) {
echo "
<script type='text/javascript' language='JavaScript'>
alert ('Какая неприятность! На вашем устройстве не сохранен вход админа! Извольте войти через единую форму.')
<!--
window.location='../admin/'
//-->
</script>";
};



?>