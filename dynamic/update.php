<html>
<body>
<?php
$inst=fopen("instruction.csv","r");
$count=0;
echo "Convert List:<br />\r\n";
while (!feof($inst)) {
$count++;
$read_arr=fgetcsv($inst,0,';');
echo $find[$count]=$read_arr[0];
echo " -> ";
echo $replace[$count]=$read_arr[1];
echo "<br />\r\n";
}
fclose($inst);

for ($i=1;$i<$count;$i++) {
echo("<iframe src='buff.php".$find[$i]."&saveto=".$replace[$i]."' style='display:none'></iframe>\r\n");
}


?>
<a href='admin/'>Обратно к админской панели</a>
</body>
</html>