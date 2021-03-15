<h2>Главная страница</h2>
<div style="font-size:15pt;text-align:center">
Добро пожаловать на неофициальный сайт 10-Ф класса <a href="http://www.rl.odessa.ua">Ришельевского лицея</a>! Мы очень рады вас видеть.<br />
Мы работаем оперативно, и в этом наша сила.
</div>
<h2>Новости класса</h2>
<?php
if ($m>0) {echo ("<p><a href='/?m=".($m-1)."'>Более поздние сообщения</a></p>");};
?>
<table style="width:800px;text-align:left">
<?php
$k=10;
$m=intval($_GET["m"]);

$num=file("pages/news/number.txt");
$n=intval($num[0]);
for ($i=$n-$k*$m;($i>$n-$k*($m+1))&&($i>0);$i--) {
$echofile=file("pages/news/".$i.".txt");
$echofile[0]=str_replace("\r","",$echofile[0]);
$echofile[0]=str_replace("\n","",$echofile[0]);
$echofile=str_replace("\r\n","<br />",$echofile);
$echofile=str_replace("\r","<br />",$echofile);
$echofile=str_replace("\n","<br />",$echofile);
echo ("<tr><td>\r\n");
echo ("<hr style='size:5px;color:#DCDCDC' />");
echo ("<h3>".$echofile[0]."</h3>");
for ($j=1;$j<count($echofile);$j++) {echo $echofile[$j];};
echo ("</td></tr>\r\n");
};

?>

</table>
<?php
if ($n>$k*($m+1)) {echo ("<p><a href='/?m=".($m+1)."'>Более ранние сообщения</a></p>");};
?>