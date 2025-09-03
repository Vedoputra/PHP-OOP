<?php

$datetime = new DateTime();
$datetime->setDate(2005, 7, 04);

$datetime->add(new DateInterval("P1Y"));

$MinusDate = new DateInterval("P1M");
$MinusDate->invert = 1;
$datetime->add($MinusDate);

var_dump($datetime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Pontianak"));

var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10", new DateTimeZone("Asia/Jakarta"));
if($date){
    var_dump($date);
} else{
    echo "format salah";
}
