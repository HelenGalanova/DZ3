<?php

$list = [];

for ($i = 0; $i < 50; $i++) {
    $list[] = [rand(0, 100)];
}


$filename = "task3.csv";

$fp = fopen($filename, "w");

if ($fp === false) {
    return false;
}

foreach ($list as $value) {
    fputcsv($fp, $value);
}

fclose($fp);


$sumAllElements = 0;

$handle = fopen($filename, "r");

if ($handle === false) {
    return false;
}

while (($data = fgetcsv($handle)) !== false) {
    $sumAllElements += $data[0];
}

fclose($handle);

echo sprintf("%d\n", $sumAllElements);


?>