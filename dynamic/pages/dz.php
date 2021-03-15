<h2>Домашнее задание</h2>
<table border="1" cellpadding="5" style="border-collapse:collapse;border:2px solid black;">
<?php
//Building filename
$filename="pages/tables/dz.csv"; //default
$altname=$_GET["file"];
if (strlen($altname)>0) {$filename=$altname;} //replacing when special arguments 
//This is an universal script for converting .csv table to the HTML table
$enter_file=fopen($filename,"r");
while (!feof($enter_file)) {
$enter_now=fgetcsv($enter_file,0,";");
if (count($enter_now)>1) {
echo ("<tr>\r\n");
for ($i=0;$i<count($enter_now);$i++) {echo ("<td>".$enter_now[$i]."</td>\r\n");};
echo ("</tr>\r\n");
};
}
fclose($enter_file);
?>
</table>

