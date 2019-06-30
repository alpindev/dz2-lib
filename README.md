Библиотека пользовательских функций
===================================
## dz2-library

### Класс FirstLastKeys:

*1. Осуществляется внутренняя проверка **is_countable($arr)** в методе класса isCount($arr)*

*2. Применен тип возвращаемого значения **void** в методе setFirstLastKeys($array)*

*3. Вычисляется первый и последний ключи передаваемого массива **array_key_first($arr)**, **array_key_last($arr)***

#### Пример:
```<?php
...

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

### Класс Help:

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

### Класс Math

7. Добавлена поддержка определения области видимости для констант класса
8. Разрешен null в типизированных и возвращаемых параметрах

```php
class Math
{
    ...
    
    private const PI = '3.1415926535';

    /**
     * @param float $rad
     * @return float|null
     */
    public static function getSquareCircle(float $rad): ?float
    {
        return self::PI * $rad ^ 2;
    }
    
    ...
}
```

#### Применение:
```php
$radius = 2.5;
$square = Math::getSquareCircle($radius);
```

### index.php
```php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use forweban\dz2library\src\Help;
use forweban\dz2library\src\FirstLastKeys;
use forweban\dz2library\src\SomeFunctions;
use forweban\dz2library\src\Math;

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

$_GET['user'] = 'Vasya';
$name = SomeFunctions::getGetUser($_GET['user']);
echo $name;

Help::br();
Help::hr();

$radius = 2.5;
$square = Math::getSquareCircle($radius);
echo $square;

```

