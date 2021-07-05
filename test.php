<?php

//$hello = 'world';
//$result = shell_exec('pgthon.py ' . $hello);
//echo " $result";

$command = escapeshellcmd('test.py');
$output = shell_exec($command);
echo $output;

?>

