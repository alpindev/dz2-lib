<?php

namespace src;

class Math
{
    private const PI = '3.1415926535';

    /**
     * @param float $rad
     * @return float|null
     */
    public static function getSquareCircle(float $rad): ?float
    {
        return self::PI * pow($rad, 2);
    }
}