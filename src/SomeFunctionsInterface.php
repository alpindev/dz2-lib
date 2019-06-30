<?php

namespace src;

Interface SomeFunctionsInterface
{
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
