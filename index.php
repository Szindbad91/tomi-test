<?php
require_once 'vendor/autoload.php';

$rows = [];

$lines = file('resources/input.txt');

foreach($lines as $line) {
    $parts = explode(',', $line);
    $rows[] = new \App\Row\Row(
        (int) $parts[0],
        $parts[1],
        (int) $parts[2],
        (float) $parts[3],
    );
}

$fileHandler = fopen('resources/output.txt', 'w+');

foreach ($rows as $row) {
    fwrite($fileHandler, $row->toCsvLine());
}

fclose($fileHandler);