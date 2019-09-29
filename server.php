<?php

date_default_timezone_set("America/Sao_Paulo");
header("Cache-Control: no-cache");
header("Content-Type: text/event-stream\n\n");

$counter = rand(1, 10);

while (true) {
    echo "event: ping\n";
    $currentDate = date(DATE_ISO8601);
    echo 'data: {"time": ' . $currentDate . '"}';
    echo "\n\n";

    $counter--;

    if (!$counter) {
        echo "data: This is a message at time " . $currentDate . "\n\n";
        $counter = rand(1, 10);
    }

    ob_end_flush();
    flush();
    sleep(1);
}