<h2>Все новости</h2>
<?php
$m=intval($_GET["m"]);
?>
<table style="width:800px;text-align:left">
<?php
$num=file("pages/news/number.txt");
$n=intval($num[0]);
for ($i=$n;$i>0;$i--) {
$echofile=file("pages/news/".$i.".txt");
$echofile[0]=str_replace("\r","",$echofile[0]);
$echofile[0]=str_replace("\n","",$echofile[0]);
$echofile=str_replace("\r\n","<br />",$echofile);
$echofile=str_replace("\r","<br />",$echofile);
$echofile=str_replace("\n","<br />",$echofile);
echo ("<tr><td>\r\n");
echo ("<hr style='size:5px;color:#DCDCDC' />");
echo ("<h3 id='n".$i."'><a href='/?p=allnews#n".$i."'>".$echofile[0]."</a></h3>");
for ($j=1;$j<count($echofile);$j++) {echo $echofile[$j];};
echo ("</td></tr>\r\n");
};

?>

</table>