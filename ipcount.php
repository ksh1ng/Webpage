<?php

 $ip_file = 'ip.txt';
 if (!file_exists($ip_file)) {
         fopen($ip_file, 'w');

/* if (!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    $ip = $_SERVER["REMOTE_ADDR"];
}*/
$ip = $_SERVER["REMOTE_ADDR"];
//echo $ip. "\n";

 $count = 0;


 if (!in_array($ip, file($ip_file, FILE_IGNORE_NEW_LINES))) {
        file_put_contents($ip_file, $ip . "\n", FILE_APPEND);
 }
$handle = fopen("ip.txt", "r");

while (($line = fgets($handle)) !== false) {
        $count++ ;
 }
fclose($handle);
echo $count . "hits";

?>
