<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

// Task 1. array_key_first($arr), array_key_last($arr)

$array = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C',
    'd' => 'D',
];

$firstLast = new src\FirstLastKeys($array);
// $firstLast->test();

list($first, $last) = $firstLast->getFirstLastKeys();

echo $first;
echo $last;
