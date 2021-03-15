<?php ob_start();
$inst=fopen("instruction.csv","r");
$count=0;
while (!feof($inst)) {
$count++;
$read_arr=fgetcsv($inst,0,';');
$find[$count]=$read_arr[0];
$replace[$count]=$read_arr[1];
}
fclose($inst);

require 'index.php';

$saveto = $_GET["saveto"];

$repl_str=ob_get_contents();
//$repl_str=str_replace("\\","",$repl_str); //ONLY for the bad time when system ecrans quotes
for ($j=1;$j<$count;$j++) {$repl_str=str_replace("dynamic/".$find[$j],$replace[$j],$repl_str);};
//to fix some broken links
$repl_str=str_replace("https://dl.dropboxusercontent.com/u/26691654", "/physrl/files", $repl_str);
$repl_str=str_replace("http://dl.dropboxusercontent.com/u/26691654", "/physrl/files", $repl_str);

$write=fopen("../".$saveto,"w");
fwrite($write,$repl_str);
fclose($write);
?>
