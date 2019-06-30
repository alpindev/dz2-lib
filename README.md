Библиотека пользовательских функций
==================================
##dz2-library


###Класс FirstLastKeys:

*1. Осуществляется внутренняя проверка **is_countable($arr)** в методе класса isCount($arr)*

*2. Применен тип возвращаемого значения **void** в методе setFirstLastKeys($array)*

*3. Вычисляется первый и последний ключи передаваемого массива **array_key_first($arr)**, **array_key_last($arr)***

####Пример:
```<?php
require __DIR__.'/vendor/autoload.php';

use src\FirstLastKeys;

$array = [
    'a' => 'AAA',
    'b' => 'BBB',
    'c' => 'CCC',
    'd' => 'DDD',
];

$firstLast = new FirstLastKeys($array);

list($first, $last) = $firstLast->getFirstLastKeys();

// $first = 'a'
// $last = 'd'
```

###Класс SomeFunctions:

*4. Содержит метод хеширование пароля с помощью Argon2*

####Пример:
```<?php
$password = 'qwerty';
$hashArgon = SomeFunctions::hashArgon($password);
```

*5. Содержит метод метод получения значения переменной с помощью  оператора объединения с null ??*

```
public static function getGetUser($getUser)
    {
        return $userName = $getUser ?? 'nobody';
    }
```

Оператор возвращает первый операнд, если он задан и не равен NULL, в обратном случае возвращает второй операнд

####Пример:
Извлекаем значение $_GET['user'], а если оно не задано, то возвращаем 'nobody'
```
$_GET['user'] = 'Vasyz';
$name = SomeFunctions::getGetUser($_GET['user']);
```


