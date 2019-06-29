Библиотека ползовательских функций
==================================


PHP 7.0
----------

1. Оператор объединения с null (Null coalescing operator, ??)

Он возвращает первый операнд, если он задан и не равен NULL, а в обратном случае возвращает второй операнд

<?php
// Извлекаем значение $_GET['user'], а если оно не задано,
// то возвращаем 'nobody'
$username = $_GET['user'] ?? 'nobody';
// Это идентично следующему коду:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

PHP 7.1
-------

2. Cтроковые ключи в конструкции list() и []


3. Получаем первый и последний элемент массива - ??


4. Добавлен тип возвращаемого значения void
Функции с таким заданным типом возвращаемого значения не должны ничего возвращать. То есть либо вообще не содержать ни одного оператора return, либо использовать его без параметра. NULL не является корректным значением для возврата в таких функциях.

<?php
// Меняем значения переменных местами

    function swap(&$left, &$right): void
    {
        if ($left === $right) {
            return;
        }
    
        $tmp = $left;
        $left = $right;
        $right = $tmp;
    }
    
    $a = 1;
    $b = 2;
    var_dump(swap($a, $b), $a, $b);
?>

Результат выполнения данного примера:

null
int(2)
int(1)


РНР 7.2
-------

5. В ядро PHP добавлена Libsodium. 
Хеширование пароля с помощью Argon2 — это современный простой алгоритм, направленный на высокую скорость
 заполнения памяти и эффективное использование нескольких вычислительных блоков

<?php
    echo 'Хеш Argon2i: ' . password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
    
    // Хеш Argon2i:
    // $argon2i$v=19$m=1024,t=2,p=2$YzJBSzV4TUhkMzc3d3laeg$zqU/1IN0/AogfP4cmSJI1vc8lpXRW9/S0sYY2i2jHT0
?>

PHP 7.3
--------

6. Добавление функций array_key_first() и array_key_last()

// usage of an associative array
$array = ['a' => 1, 'b' => 2, 'c' => 3];
$firstKey = array_key_first($array);

Полифил, если array_key_first() отсутствует -
<?php
if (!function_exists('array_key_first')) {
    function array_key_first(array $arr) {
        foreach($arr as $key => $unused) {
            return $key;
        }
        return NULL;
    }
}
?>



PHP 7.4
-------

7. Возврат нескольких значений в виде массива

<?php
function small_numbers()
{
    return array (0, 1, 2);
}
list ($zero, $one, $two) = small_numbers();
?>