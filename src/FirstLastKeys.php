<?php
// src: src/FirstLastKeys.php

namespace src;

class FirstLastKeys
{
    private $first;
    private $last;
    private $array;

    /**
     * FirstLastKeys constructor.
     * @param array $arr
     */
    public function __construct(array $arr)
    {
        $this->array = $arr;
        $this->setFirstLastKeys($this->array);
    }

    /**
     * @param $array
     * Возвращает пару переменных - первый и последний ключ массива с целью приема их
     * с помощью list()
     * Встроена проверка на количество элементов массива:
     * - 2 и больше - работает
     * - 1 или пусто - выдает ошибку     *
     */
    private function setFirstLastKeys($array)
    {
        if(!$this->isCount($array) ) {
            return false;
        }
        if(!$this->isMoreOne($array) ) {
            return false;
        }

        $this->setFirst($array);
        $this->setLast($array);

        return true;
    }

    /**
     * @param $arr
     * @retprivateurn bool
     * Вычисляем, поддается ли массив счету
     */
    private function isCount($arr)
    {
        return is_countable($arr) ? true : false;
    }

    /**
     * @param $arr
     * @return bool
     * Вычисляем, есть ли в массиве 2 или более элементов,
     * чтобы вычисляить первый и последний элементы
     */
    private function isMoreOne($arr)
    {
        return count($arr) > 1 ? true : false;
    }

    /**
     * @param $arr
     */
    private function setFirst($arr)
    {
        $this->first = array_key_first($arr);
    }

    /**
     * @param $arr
     */
    private function setLast($arr)
    {
        $this->last = array_key_last($arr);
    }

    public function test()
    {
        echo 'test';
    }

    /**
     * @return mixed
     */
    public function getFirstLastKeys()
    {
        return array ( $this->first, $this->last );
    }
}