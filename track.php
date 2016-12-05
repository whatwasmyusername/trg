<?php
$fn = __DIR__.'/count.txt';
if (file_exists($fn)){
    $count = intval(file_get_contents($fn))+1;
}
else{
    $count = 1;
}
file_put_contents($fn, $count);
include __DIR__.'/counter.php';

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$log = fopen(__DIR__.'/click.log', 'a+');
fwrite($log, date('c') . "\t" . $ip . "\t" . $count . "\n");
fclose($log);
