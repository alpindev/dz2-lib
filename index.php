<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use src\Help;

$array = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C',
    'd' => 'D',
];

$firstLast = new src\FirstLastKeys($array);

list($first, $last) = $firstLast->getFirstLastKeys();

echo 'First key of array is \'' . $first . '\'';
Help::br(1);
echo 'Last key of array is \'' . $last . '\'';
Help::br(1);
Help::see($array);
Help::hr();


