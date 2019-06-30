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
     * Возвращает тип void
     * Встроена проверка на:
     * - количество элементов массива (2 и больше - работает, 1 или пусто - ошибка
     * - входной параметр массив/не массив
     */
    private function setFirstLastKeys(array $array): void
    {
        if(!$this->isCount($array) ) {
            echo 'Needed array!';
        }
        if(!$this->isMoreOne($array) ) {
            echo 'Needed 2 or above items in array`s!';
        }

        $this->setFirst($array);
        $this->setLast($array);
    }

    /**
     * @param $arr
     * @retprivateurn bool
     * Вычисляем, поддается ли массив счету
     */
    private function isCount(array $arr)
    {
        /** @var array $arr */
        return is_countable($arr) ? true : false;
    }

    /**
     * @param $arr
     * @return bool
     * Вычисляем, есть ли в массиве 2 или более элементов,
     * чтобы вычисляить первый и последний элементы
     */
    private function isMoreOne(array $arr)
    {
        /** @var array $arr */
        return count($arr) > 1 ? true : false;
    }

    /**
     * @param $arr
     */
    private function setFirst(array $arr)
    {
        /** @var array $arr */
        $this->first = array_key_first($arr);
    }

    /**
     * @param $arr
     */
    private function setLast(array $arr)
    {
        /** @var array $arr */
        $this->last = array_key_last($arr);
    }

    /**
     * @return mixed
     */
    public function getFirstLastKeys()
    {
        return array(
            $this->first,
            $this->last,
        );
    }
}