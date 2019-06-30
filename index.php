<?php
declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

use src\Help;
use src\FirstLastKeys;
use src\SomeFunctions;

$array = [
    'a' => 'AAA',
    'b' => 'BBB',
    'c' => 'CCC',
    'd' => 'DDD',
];

$firstLast = new FirstLastKeys($array);

list($first, $last) = $firstLast->getFirstLastKeys();

echo 'First key of array is \'' . $first . '\'';
Help::br(1);
echo 'Last key of array is \'' . $last . '\'';
Help::br();
Help::see($array);
Help::hr();

$password = 'qwerty';
$hashArgon = SomeFunctions::hashArgon($password);
echo $hashArgon;

Help::br();
Help::hr();

// For example:
$_GET['user'] = 'Vasya';
$name = SomeFunctions::getGetUser($_GET['user']);
echo $name;

Help::br();
Help::hr();



