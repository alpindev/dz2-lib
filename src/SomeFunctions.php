<?php

namespace src;

class SomeFunctions implements SomeFunctionsInterface
{

    /**
     * Оператор объединения ??
     *
     * @param $getUser (GET['user'])
     * @return $userName - имя пользователя из GET['user'], если он задан и не равен NULL,
     * в противном возвращает 'nobody'
     */
    public static function getGetUser(string $getUser)
    {
        return $userName = $getUser ?? 'nobody';
    }

    /**
     * @param $password
     * @return bool|mixed|string
     */
    public static function hashArgon(string $password)
    {
        return password_hash($password, PASSWORD_ARGON2I);
    }
}