Библиотека пользовательских функций
==================================
## dz2-library

### Класс FirstLastKeys:

*1. Осуществляется внутренняя проверка **is_countable($arr)** в методе класса isCount($arr)*

*2. Применен тип возвращаемого значения **void** в методе setFirstLastKeys($array)*

*3. Вычисляется первый и последний ключи передаваемого массива **array_key_first($arr)**, **array_key_last($arr)***

#### Пример:
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

### Класс SomeFunctions:

*4. Содержит метод хеширование пароля с помощью Argon2*

#### Пример:
```<?php
$password = 'qwerty';
$hashArgon = SomeFunctions::hashArgon($password);
```

*5. Содержит метод получения значения переменной с помощью  оператора объединения с null ??*

Оператор возвращает первый операнд, если он задан и не равен NULL, в обратном случае возвращает второй операнд
```
public static function getGetUser($getUser)
{
    return $userName = $getUser ?? 'nobody';
}
```

#### Пример:
Извлекаем значение $_GET['user'], а если оно не задано, то возвращаем 'nobody'

```
$_GET['user'] = 'Vasyz';
$name = SomeFunctions::getGetUser($_GET['user']);
```

### Класс SomeFunctions:

6. Реализована возможность разрешать null в типизированных и возвращаемых параметрах

```php
public static function br($n = null)
    {
        for ($i = 0; $i <= $n; $i++) {
            echo "<pre>".PHP_EOL."</pre>";
        };
    }
```

#### Применение:
```php
Help::br();
Help::br(3);
```


7. uuuuuuuuuuuuu



