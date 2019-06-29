<?php

namespace SomeFunctions;

Interface SomeFunctionsInterface
{

    /**
     * @param $array
     * @return  ($first, $last) - первый и последний ключ массива
     * (с целью приема их с помощью list())
     * Встроена проверка на количество элементов массива:
     * - 2 и больше - работает
     * - 1 или пусто - выдает ошибку
     */
    public function getFirstLastKeys($array);

    /**
     * @param $getUser (GET['user'])
     * @return $userName - имя пользователя из GET['user'], если он задан и не равен NULL,
     * в противном возвращает 'nobody'
     */
    public static function getGetUser($getUser);

    /**
     * @param $password
     * @return mixed
     */
    public static function hashArgon($password);
}
